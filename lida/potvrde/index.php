<?php 

error_reporting(E_ALL);
ini_set("display_errors", "on");

	$primatelji[1] = "boris.badurina@gmail.hr";
//	$primatelji[10] = "boris.badurina@zg.t-com.hr";
//	$primatelji[12] = "boris.badurina@inet.hr";



	require(ROOT . "/include/PHPmailer/class.phpmailer.php");
	require("/home/badurina/www/lida/lib/PHPmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	
	$mail->IsMail(); 
	$mail->Host = "mail.unizd.hr";
	$mail->SMTPAuth = false; 
	$mail->CharSet = "utf-8";
	$mail->From = "noreply@ozk.unizd.hr";
	$mail->FromName = "LIDA";
	$mail->Subject = "LIDA Certificate of attendance";
	$mail->IsHTML(true);                


	foreach($primatelji as $key => $value){
	$mail->AddAddress(trim($value));
	$mail->AddAttachment("/home/badurina/www/lida/datoteke/potvrde/cert2018061315-" . $key . ".pdf");                     
	
	
	$mail->Body    = '
	<p>Dear LIDA participants, authors, sponsors,<br>
<br>
we are happy to inform you that PowerPoint presentation have been uploaded on LIDA website.<br>
<br>
Also, as promised we are sending you a link where you can now access and download your LIDA 2018 certificate of attendance: <a href="http://ozk.unizd.hr/lida/certificates/">http://ozk.unizd.hr/lida/certificates</a> (or find it attached)<br>
<br>
Also, we would appreciate it very much if you could fill out a short conference evaluation form and help us organize even better LIDA conferences in future. Our online survey is available at: <ahref="https://sokrat.ffos.hr/lida2018">https://sokrat.ffos.hr/lida2018</a><br>
<br>
We have one more request. Should you write a report on LIDA 2018 and publish it someplace, we would be very grateful if you shared it with us so that we can include it into our media coverage archives.<br>
<br>
Thank you all once again for being part of LIDA 2018 and making it such a great event!<br>
<br>
Looking forward to seeing you again at LIDA 2020!<br>
<br>
Best regards,<br>
LIDA 2018 Organizing Committee </p>
	';
	$mail->AltBody = '
Dear LIDA participants, authors, sponsors,

we are happy to inform you that PowerPoint presentation have been uploaded on LIDA website.

Also, as promised we are sending you a link where you can now access and download your LIDA 2018 certificate of attendance: http://ozk.unizd.hr/lida/certificates (or find it attached)

Also, we would appreciate it very much if you could fill out a short conference evaluation form and help us organize even better LIDA conferences in future. Our online survey is available at: https://sokrat.ffos.hr/lida2018

We have one more request. Should you write a report on LIDA 2018 and publish it someplace, we would be very grateful if you shared it with us so that we can include it into our media coverage archives.

Thank you all once again for being part of LIDA 2018 and making it such a great event!

Looking forward to seeing you again at LIDA 2020!

Best regards,
LIDA 2018 Organizing Committee

	';
	if(!$mail->Send()) {
		$error[] = $key . "- Slanje maila nije uspjelo. Greška: " . $mail->ErrorInfo;
	}else{
		$error[] = $key . "- Success";
	}
    $mail->clearAddresses();
    $mail->clearAttachments();
	}
	print_r($error);
?>