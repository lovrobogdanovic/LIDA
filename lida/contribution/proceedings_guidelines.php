<?php
//<!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1250"> -->

include('../lib/template.inc');
include('../lib/config.php');

$template="no_pics.html";
$self=str_replace(LOCAL, "", $_SERVER['PHP_SELF']);
$self_array=explode ("/", $self);
$module=$self_array[1];
$body="../html/proceedings_guidelines.html";
if (file_exists("../html/".$module."_pics.html")){
	$pics="../html/".$module."_pics.html";
}else{
	$pics="../html/default_pics.html";
}
//********** Priprema sadrzaja **************
$tpl = new Template('../templates');
include('../lib/priprema_sadrzaja.php');
//*******************************************

$tpl->pparse('output', 'normal')
?>
