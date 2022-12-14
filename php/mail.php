<?php

date_default_timezone_set('Asia/Kolkata');

$sendto = 'saptarshi.c@digitallyinked.in';

        /*      Get Form Data       */

$CustomerName = htmlspecialchars(strip_tags($_POST['customerName']));
$CustomerCompany = strip_tags($_POST['customerCompany']);
$CustomerWebsite = htmlspecialchars(strip_tags($_POST['customerWebsite']));
$CustomerEmail = htmlspecialchars(strip_tags($_POST['customerEMailID']));
$CustomerPhone = htmlspecialchars(strip_tags($_POST['customerPhoneNumber']));
$CustomerMessage = strip_tags($_POST['customerMessage']);

        /*  Concatenate Variables   */

$subject = "$CustomerName - "."Website Contact Form";

$header = "From: $CustomerEmail\n".
          "Reply-To: $CustomerEmail";

$message_body = "Name:\t\t$CustomerName\n".
                "Company:\t$CustomerCompany\n".
                "Email:\t\t$CustomerEmail\n".
                "Website:\t$CustomerWebsite\n".
                "Phone:\t\t$CustomerPhone\n".
                "Message:\n\n$CustomerMessage\n\n";

        /*        Send Email       */


$mail_sent = mail($sendto,$subject,$message_body,$header);

if($mail_sent)
{
    echo "Your comments/questions have been submitted successfully. If you don't hear back from me in 48 hours, please contact me using the information provided above.";
}
else
{
    echo "There was an error sending your message. Please contact me using the information provided above.";
}

?>