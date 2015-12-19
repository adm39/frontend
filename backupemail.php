<?php
require("/home/amit/phpmailer/PHPMailerAutoload.php");

	$mailer = new PHPMailer();

        $mailer->isSMTP();
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'teamsavage490@gmail.com';
        $mailer->Password = '#teamsavage';
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;

        $mailer->addAddress('teamsavage490@gmail.com');
        $mailer->isHTML(true);

        $mailer->Subject = "BACKUPS SUCCESSFUL!!";

        $mailer->setFrom = ('teamsavage490@gmail.com');

        $mailer->Body ="If you are reading this email, then the backups were a success.";
	
	if(!$mailer->send()) {
 	   echo "Message could not be sent.\n";
    	   echo "Mailer Error: " . $mailer->ErrorInfo;
	} else {
    	  echo "Message has been sent.\n";
	}		

?>
