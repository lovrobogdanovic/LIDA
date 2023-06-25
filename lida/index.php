<?php

include('lib/template.inc');
include('lib/config.php');

$body="../html/index.html";
$template="start.html";
//********** Priprema sadrzaja **************
$tpl = new Template('templates');
include('lib/priprema_sadrzaja.php');
//*******************************************

$tpl->set_block('normal', 'news_tpl', 'news');
$tpl->set_file('news', '../html/news_home.html');
$tpl->loadfile('news');
$tpl->set_var('TEST', LOCAL);
$vrijeme = date("H") < 13 ? date("h:i A") : date("H:i");

$tpl->set_var("CURR_LOCAL_TIME", $vrijeme);

$tpl->pparse('output', 'normal')
?>
