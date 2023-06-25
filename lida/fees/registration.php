<?php
//<!-- <meta http-equiv="Content-Type" content="text/html; charset=windows-1250"> -->

include('../lib/template.inc');
include('../lib/config.php');

if(REGISTRATION == 'closed'){
	header("Location:closed.php");
	exit;
}


$template="registration.html";

if (!isset($_GET["reg"])){
	header("Location:http://web.ffos.hr/lida/fees");
	exit;
}
// SAMO ZA POST REGISTRACIJE ZA NORMALNU TREBA IZBRISATI (KOMENTRATI)
/*if (!isset($_GET["post_reg"])){
	header("Location:" . LOCAL . "/fees");
	exit;
}
*/

if(date("U") > date("U", strtotime("2010-04-17"))){
	$early_bird = 0;
}else{
	$early_bird = 1;
}

$body="../html/registration/form.html";


$reg=$_GET["reg"];

switch($reg)
{
	case 1:		
				$basis = $early_bird == 1 ? 300 : 400;
				$subject = "LIDA registracija 2010 SUDIONICI";
				$naslov = "Regular Participants";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 2:
				$basis = $early_bird == 1 ? 200 : 250;
				$subject = "LIDA registracija 2010 S PRIHVACENIM RADOM";
				$naslov = "Participants with Accepted Papers, Workshop, Posters";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 3:
				$basis = $early_bird == 1 ? 150 : 200;
				$subject = "LIDA registracija 2010 STUDENTI";
				$naslov = "Student Participants";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 4:
				$basis = $early_bird == 1 ? 100 : 150;
				$subject = "LIDA registracija 2010 STUDENTI S PRIHVACENIM RADOM";
				$naslov = "Student Paricipants with Accepted Papers, Workshops, Posters";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 5:	
				$basis = $early_bird == 1 ? 100 : 150;
				$subject = "LIDA registracija 2010 PRATNJA";
				$naslov = "Accompanying Persons";
				$tekst = "<b>Fee: </b>" . $basis . " Euros<br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
	case 6:	
				$basis = $early_bird == 1 ? 500 : 600;
				$subject = "LIDA registracija 2010 COMMERCIAL PRESENTATION";
				$naslov = "Commercial presentation";
				$tekst = "<b>Fee: </b>" . $basis . " Euros<br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
	case 7:	
				$basis = $early_bird == 1 ? 300 : 400;
				$subject = "LIDA registracija 2010 COMMERCIAL EXIBITION";
				$naslov = "Commercial exibition";
				$tekst = "<b>Fee: </b>" . $basis . " Euros<br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
	case 8:	
				$basis = $early_bird == 1 ? 700 : 800;
				$subject = "LIDA registracija 2010 COMMERCIAL BOTH";
				$naslov = "Commercial presentation and exibition";
				$tekst = "<b><br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
	case 9:	
				$basis = 0;
				$subject = "LIDA registracija 2010 OC";
				$naslov = "Organizing/Program comitee";
				$tekst = "<b><br>
				<b>Includes:</b> banquet, transfer to/from Mljet and Dubrovnik sightseeing";
				break;
	case 10:	
				$basis = $early_bird == 1 ? 150 : 200;
				$subject = "LIDA registracija 2010 Samo Dubrovnik";
				$naslov = "Only Dubrovnik";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 11:	
				$basis = $early_bird == 1 ? 150 : 200;
				$subject = "LIDA registracija 2010 Samo Zadar";
				$naslov = "Only Zadar";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
	case 12:	
				$basis = 0;
				$subject = "LIDA registracija 2010 interni upis";
				$naslov = "Interni";
				$tekst = "<b>Conference fee:</b>  " . $basis . " Euros<br>
				<b>Includes:</b> two workshops<br>";
				break;
}


//********** Priprema sadrzaja **************
$tpl = new Template('../templates');
include('../lib/priprema_sadrzaja.php');

$tpl->set_var('REG_CODE', 	$reg);
$tpl->set_var('BASIS', 		$basis);
$tpl->set_var('SUBJECT', 	$subject);
$tpl->set_var('NASLOV', 	$naslov);
$tpl->set_var('TEKST', 		$tekst);
if($early_bird == 1){
	$tpl->set_var('LATE_BIRD', 		"");
}else{
	$tpl->set_var('LATE_BIRD', 		" + " . LATE_BIRD_AMMOUNT);
}

//*******************************************

$tpl->pparse('output', 'normal')
?>
