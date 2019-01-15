<?php
//database connection information
$host="localhost";
$user="P00573119";
$password="Poo573119#";
$database="P00573119";

if(mysqli_connect_error()){
    die('Connect Error: ' . mysqli_connect_error());
} else {
    echo 'Successful connection to database';
}
?>


