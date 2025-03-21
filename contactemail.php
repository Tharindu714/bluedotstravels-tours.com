<?php
require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["email"])) {

    $email = $_GET["email"];

    $resultSet = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "';");
    $num = $resultSet->num_rows;

    $code = uniqid();

    Database::insUpdelete("UPDATE `contact` SET `code` = '" . $code . "'WHERE `user_email` = '" . $email . "';");

    // email code
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tharibro2211@gmail.com';
    $mail->Password = 'osproabgubeizhym';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('tharibro2211@gmail.com', 'Thanks for your Booking We Will reply You soon!');
    $mail->addReplyTo('tharibro2211@gmail.com', 'Thanks for your Booking We Will reply You soon!');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Your booking is successfully received to Blue Dots Travels';
    $bodyContent = '<h1 style="color:#d63384">We will contact you as soon as possible</h1> <br> 
    <span>Blue Dots Travels & tours<br>
    Call Us:- +94772805595<br><b>Your Order Number :- ' . $code . '</b> 
    <br>Save your Bill and take it with you</span>';
    $mail->Body = $bodyContent;

    if ($mail->send()) {
        echo 'Submitted Successfully';
    } else {
        echo "We have got some issues. Try disabling your virus guard or firewall again";
    }
}