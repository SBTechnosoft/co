<?php
error_reporting(E_STRICT | E_ALL);
date_default_timezone_set('Etc/UTC');
require_once("class.phpmailer.php" );
include 'class.smtp.php';
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
				
				$mail->IsSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                // Specify main and backup server //sg2plcpnl0073.prod.sin2.secureserver.net port=465
				$mail->Port =  465;                                    // Set the SMTP port
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
                 // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
				$mail->Username = $email_id;                // SMTP username
				$mail->Password= $password; 
				$mail->From = $email_id;
				$mail->FromName = $email_id;
				$mail->AddAddress($email);  // Add a recipient
				$mail->IsHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'New Order';
				$mail->Body    =$html;
				$mail->addAttachment($pdf,$file);
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				if(!$mail->Send()) {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
					exit;
					}
				echo 'Message has been sent';
			
			?>