<?php
require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";


use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["email"])) {
    $email = $_POST["email"];

    $admin_Resultset = Database::search("SELECT * FROM `admin` WHERE 
  `email` = '" . $email . "'");

    $details_resultSet = Database::search("SELECT * FROM `user`");
    $data = $details_resultSet->fetch_assoc();

    // $invoice_rs = Database::search("SELECT * FROM `contact` WHERE `user_email`='" . $data["email"] . "' ORDER BY `date_time` DESC");
    // $invoice_data = $invoice_rs->fetch_assoc();

    $admin_num = $admin_Resultset->num_rows;
    if ($admin_num > 0) {

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tharibro2211@gmail.com';
        $mail->Password = 'osproabgubeizhym';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('tharibro2211@gmail.com', 'Blue Dots Travels Bookings');
        $mail->addReplyTo('tharibro2211@gmail.com', 'Blue Dots Travels Bookings');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Blue Dots Travels new booking alert';
        $bodyContent = '<h1 style="color:#b51464">New Booking has received</h1> <br>
        <span class="fw-bold text-success">Booking Number: ' . $invoice_data["code"] . '</span> <br>
        <span>Tour Details: ' . $invoice_data["detail"] . '</span> <br>
        <span>Customer Name: ' . $data["fname"] . " " . $data["lname"] . '</span> <br>
        <span>Customer Mobile: ' . $data["mobile"] . '</span> <br>
        <span>Customer Email: ' . $data["email"] . '</span>';
        $mail->Body = $bodyContent;

        if ($mail->send()) {
            echo "success";
        } else {
            echo 'Verification code sending failed';
        }
    } else {
        echo ('You are not allowed to access');
    }
} else {
    echo ('Oops! Something Went wrong');
}