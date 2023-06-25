<?php 
include_once ("include/config.php");

$image_path = isset($_GET["f"]) ? $_GET["f"] : false;
if($image_path == false) $image_path = "/dummy.jpg";

$image_path  = "../images/baobab" . $image_path;

if(!file_exists($image_path)) $image_path  = "../images/baobab/slike/dummy.jpg";

$image_array = explode(".", $image_path);
$image_array = array_reverse($image_array);
$extenzija = $image_array[0];

$imageInfo = getimagesize ($image_path);
$MB = Pow(1024,2);  // number of bytes in 1M
$K64 = Pow(2,16);    // number of bytes in 64K
$TWEAKFACTOR = 12;  // Or whatever works for you
$memoryNeeded = round( ( $imageInfo[0] * $imageInfo[1]
									   * $imageInfo['bits']
									   * $imageInfo['channels'] / 8
						 + $K64
					   ) * $TWEAKFACTOR
					 );
$memoryHave = memory_get_usage();
$memoryLimit = (integer) ini_get('memory_limit');
$memoryLimitMB = $memoryLimit * $MB;

if ( function_exists('memory_get_usage') 
	 && $memoryHave + $memoryNeeded > $memoryLimit 
   ) {
   $newLimit = $memoryLimitMB + ceil( ( $memoryHave 
									 + $memoryNeeded 
									 - $memoryLimit 
									 ) / $MB 
								   );
   ini_set( 'memory_limit', $newLimit . 'M' );
}

Header( "Content-type: image/jpeg");

if($extenzija == "jpg" || $extenzija == "jpeg"){
	$big_image=imagecreatefromjpeg($image_path);
}elseif($extenzija == "png"){
	$big_image=imagecreatefrompng($image_path);
}else{
	$big_image=imagecreatefromgif($image_path);
}
$width = $imageInfo[0];
$height =  $imageInfo[1];

if(isset($_GET["w"]) && @$_GET["w"] > 0){
	$new_width = $_GET["w"];
	$ratio = $width/$new_width;
	if(isset($_GET["h"]) && @$_GET["h"] > 0){
		$new_height = $_GET["h"];
	}else{
		$new_height = floor(($height/$ratio)+0.5);
	}
}elseif(isset($_GET["h"]) && @$_GET["h"] > 0){
	$new_height = $_GET["h"];
	$ratio = $height/$new_height;
	$new_width = floor(($width/$ratio)+0.5);
}else{
	$new_width = $width;
	$new_height = $height;
}

$image_out=imagecreatetruecolor($new_width, $new_height);
if(isset($_GET["cut"]) && @$_GET["cut"] == 1){
	if($height/$width < $new_height/$new_width){
		$new_new_height = $height;
		$new_new_width = floor((($new_width*$height)/$new_height)+0.5);
	}else{
		$new_new_width = $width;
		$new_new_height = floor((($new_height*$width)/$new_width)+0.5);
	}
	$copy=imagecopyresampled($image_out, $big_image, 0, 0, 0, 0, $new_width, $new_height, $new_new_width, $new_new_height);
}else{
	$copy=imagecopyresampled($image_out, $big_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
}
imagejpeg ($image_out);
imagedestroy ($big_image);
imagedestroy ($image_out);

?>