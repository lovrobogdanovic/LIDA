<?php
//<!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1250"> -->

include('../lib/template.inc');
include('../lib/config.php');

$template="registration.html";

if (!isset($_GET["reg"])){
	header("Location:" . LOCAL . "/fees");
	exit;
}

$body="../html/registration/form.html";


$reg=$_GET["reg"];

switch($reg)
{
	case 1:		
				$basis = 300;
				$subject = "LIDA registracija 2005 SUDIONICI";
				$naslov = "Regular Participants";
				$tekst = "<b>Conference fee:</b>  300 Euros<br>
				<b>Includes:</b> one workshop or tutorial<br>
				<b>Additional workshop or tutorial: </b>25 Euros each";
				break;
	case 2:
				$basis = 200;
				$subject = "LIDA registracija 2005 S PRIHVACENIM RADOM";
				$naslov = "Participants with Accepted Papers, Workshop, Posters";
				$tekst = "<b>Conference fee:</b>  200 Euros<br>
				<b>Includes:</b> one workshop or tutorial<br>
				<b>Additional workshop or tutorial: </b>25 Euros each";
				break;
	case 3:
				$basis = 150;
				$subject = "LIDA registracija 2005 STUDENTI";
				$naslov = "Student Participants";
				$tekst = "<b>Conference fee:</b>  150 Euros<br>
				<b>Includes:</b> one workshop or tutorial<br>
				<b>Additional workshop or tutorial: </b>25 Euros each";
				break;
	case 4:
				$basis = 100;
				$subject = "LIDA registracija 2005 STUDENTI S PRIHVACENIM RADOM";
				$naslov = "Student Paricipants with Accepted Papers, Workshops, Posters";
				$tekst = "<b>Conference fee:</b>  100 Euros<br>
				<b>Includes:</b> one workshop or tutorial<br>
				<b>Additional workshop or tutorial: </b>25 Euros each";
				break;
	case 5:	
				$basis = 100;
				$subject = "LIDA registracija 2005 PRATNJA";
				$naslov = "Accompanying Persons";
				$tekst = "<b>Fee: </b>100 Euros<br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
}


//********** Priprema sadrzaja **************
$tpl = new Template('../templates');
include('../lib/priprema_sadrzaja.php');
$tpl->set_block('body', 'workshops_blok', 'workshops');

$tpl->set_var('BASIS', 		$basis);
$tpl->set_var('SUBJECT', 	$subject);
$tpl->set_var('NASLOV', 	$naslov);
$tpl->set_var('TEKST', 		$tekst);

if($reg==5){
	$tpl->set_var('workshops', '');
}else{
	$tpl->parse ('workshops', 'workshops_blok');
}

//*******************************************

$tpl->pparse('output', 'normal')
?>
