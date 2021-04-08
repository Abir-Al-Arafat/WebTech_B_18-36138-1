<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$link = mysqli_connect($servername,$username,$password) or die(mysqli_error($link));
mysqli_select_db($link,$dbname) or die(mysqli_error($link));
?>