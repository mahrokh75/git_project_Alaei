<?php
$servername = "127.0.0.1:3306"; 
$username = "root";
$password = "";
$database = "task_manager";

// اتصال به دیتابیس
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("اتصال به دیتابیس ناموفق بود: " . mysqli_connect_error());
}