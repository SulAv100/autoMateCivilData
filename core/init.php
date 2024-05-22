<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword="";
$dbname ="autocompform";


$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
if ($conn-> connect_error){
    die ("Failed to connect: ".$conn-> connect_error);
}