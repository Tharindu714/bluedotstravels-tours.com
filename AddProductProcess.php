<?php
session_start();
require "connection.php";

$email = $_SESSION["user"]["email"];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mob"];
$email = $_POST["email"];
$city = $_POST["city"];
$detail = $_POST["desc"];

$datetime = new DateTime();
$timezone = new DateTimeZone("Asia/Colombo");
$datetime->setTimezone($timezone);
$date = $datetime->format("Y-m-d H:i:s");

$code = uniqid();

if (empty($fname)) {
  echo ("Please Enter The First Name");
} else if (empty($lname)) {
  echo ("Please Enter The Last Name");
} else if (empty($mobile)) {
  echo ("Please Enter The Mobile Number");
} else if (empty($email)) {
  echo ("Please Enter The Email Address");
} else if ($city == "0") {
  echo ("Please Enter The current Living City");
} else if (empty($detail)) {
  echo ("Mention Adventure type , quantity of people and your other choices and interests about the tour");
}else if(strlen($detail) < 10 || strlen($detail) > 250){
  echo ("You are exceeding the word limit <br> Type 10-250 characters allowed");
} else {

  Database::insUpdelete("INSERT INTO `contact`

    (`detail`,`user_email`,`date_time`,`code`)
    VALUES ('" . $detail . "' , '" . $email . "','" . $date . "','" . $code . "')");

  echo ("Submitted Successfully");
}