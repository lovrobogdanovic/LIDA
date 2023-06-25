<?php 
if (isset($_GET["printable"])){
	$tpl->set_file('normal', 'printable.html');
	$tpl->set_block('normal', 'body_blok', 'body');
	$tpl->set_file('body', $body);
	$tpl->loadfile('body');
	$tpl->set_var('LOCAL', LOCAL);
}else{
	$tpl->set_file('normal', $template);
	$tpl->set_block('normal', 'body_blok', 'body');
	$tpl->set_file('body', $body);
	$tpl->loadfile('body');
	$tpl->set_block('normal', 'lijevi_meni_blok', 'lijevi_meni');
	$tpl->set_file('lijevi_meni', 'lijevi_meni.html');
	$tpl->loadfile('lijevi_meni');
	if ($template=="pics.html"){
//		$tpl->set_block('normal', 'pics_blok', 'pics');
//		$tpl->set_file('pics', $pics);
//		$tpl->loadfile('pics');
	}
	$tpl->set_var('LOCAL', LOCAL);
	$tpl->set_var('ABSOLUTE_LOCAL', ABSOLUTE_LOCAL);
	$tpl->set_var('MODIFIED', MODIFIED);
}
?>