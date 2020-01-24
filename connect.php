<?php

$dbPassword = "Outbreak012!";
$dbUserName = "WRClient";
$dbServer = "localhost";
$dbName = "WebResponseDB";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);