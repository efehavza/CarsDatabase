<?php

$host = 'localhost';
$username = 'havzam_admin';
$password = 'LRve}{cDJp=X';
$db_name = 'havzam_mydb';

$conn = mysqli_connect($host, $username, $password, $db_name);

if(empty($conn)) {

    die("Connection problem: ".mysqli_connect_error());

}