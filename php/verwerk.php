<?php
//secure,trim and strip data & display for test purpose
//create empty variables
$firstname = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = secure_data($_POST["firstname"]);
    $message = secure_data($_POST["message"]);}

function secure_data($rawdata) {
    $rawdata = htmlspecialchars($rawdata);
    $rawdata = stripslashes($rawdata);
    $rawdata = trim($rawdata);
    $myfile = fopen("message.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $rawdata."<br>");
    fclose($myfile);
    }
