<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "roboticArmDB";

$conn = new mysqli('localhost','root','','roboticArmDB');

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$_SESSION['Status'] = "Success!!";
    header('location: Robotic Arm Interface.php');

$conn->close();
?>