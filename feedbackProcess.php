<?php
session_start();
require "connection.php";

$email = $_SESSION["user"]["email"];

$name = $_POST["Name"];
$date = $_POST["date"];
$type = $_POST["type"];
$feedback = $_POST["feedback"];

if (empty($name)) {
  echo ("Please Enter Your Name");
} else if (empty($date)) {
  echo ("Please Enter The Date");
} else if (empty($type)) {
  echo ("Please Enter The Tour You went");
} else if (empty($feedback)) {
  echo ("Entering Your Feedback is the most required");
}else if(strlen($feedback) < 10 || strlen($feedback) > 250){
  echo ("You are exceeding the word limit <br> Type 10-250 characters allowed");
} else {

  Database::insUpdelete("INSERT INTO `feedback`

    (`Name`,`feedback`,`date`,`tour_type`,`user_email`)
    VALUES ('" . $name . "' ,'" . $feedback . "' ,'" . $date . "' ,'" . $type . "' , '" . $email . "')");

  echo ("Submitted Successfully");
}