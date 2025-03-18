<?php

$servername = "localhost";
$dbusername = "root";
$dbpasswordname = "";
$dbname = "webportal";

$conn = mysqli_connect($servername, $dbusername, $dbpasswordname, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
?>