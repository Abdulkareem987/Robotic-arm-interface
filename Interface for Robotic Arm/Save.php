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

$firstSlider = $_POST['firstSlider'];
$secondSlider = $_POST['secondSlider'];
$thirdSlider = $_POST['thirdSlider'];
$fourthSlider = $_POST['fourthSlider'];
$fifthSlider = $_POST['fifthSlider'];
$sixthSlider = $_POST['sixthSlider'];

$sql = "INSERT INTO motor_range (id ,firstMotor, secondMotor, thirdMotor, fourthMotor, fifthMotor, sixthMotor) 
        VALUES ('','$firstSlider', '$secondSlider', '$thirdSlider', '$fourthSlider', '$fifthSlider', '$sixthSlider')";

if ($conn->query($sql) === TRUE) {
    
    $_SESSION['Status'] = "Data has been saved!";
    header('location: Robotic Arm Interface.php');
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>