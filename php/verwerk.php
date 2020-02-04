<?php
//secure,trim and strip data & display for test purpose
//create empty variables
$firstname = $message = $timestamp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = secure_data($_POST["firstname"]);
    $message = secure_data($_POST["message"]);}
// project voor 

function secure_data($rawdata) {
    $rawdata = htmlspecialchars($rawdata);
    $rawdata = stripslashes($rawdata);
    $rawdata = trim($rawdata);
    $timestamp =date('d-m-y_H:i:s');
    $myfile = fopen("message.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $timestamp." ".$rawdata."<br>\n");
    fclose($myfile);
    }    
    
?>    
<script type="text/javascript"> 
    history.go(-1); 
</script>