<?php


include('../lib/template.inc');
include('../lib/config.php');

$template="pics.html";
$self=str_replace(LOCAL, "", $_SERVER['PHP_SELF']);
$self_array=explode ("/", $self);
$module=$self_array[1];
$body="../html/".$module.".html";
if (file_exists("../html/".$module."_pics.html")){
	$pics="../html/".$module."_pics.html";
}else{
	$pics="../html/default_pics.html";
}
//********** Priprema sadrzaja **************
$tpl = new Template('../templates');
include('../lib/priprema_sadrzaja.php');
//*******************************************



include("cvovi.php");

$rbr = isset($_GET["rbr"]) ? $_GET["rbr"] : false;
if($rbr == false || !array_key_exists($rbr, $cv)){
    header("Location:../speakers");
    exit;
}
    
$tpl->set_var("IME", $cv[$rbr]["ime"]);    
$tpl->set_var("PREZIME", $cv[$rbr]["prezime"]);    
$tpl->set_var("CV", $cv[$rbr]["cv"]);    
$tpl->set_var("FOTKA", $cv[$rbr]["fotka"]);    


$tpl->pparse('output', 'normal')
?>
