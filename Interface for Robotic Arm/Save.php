<?php
session_start();


$conn = new mysqli('localhost','root','');

if ($conn->connect_error) 
 {
    die("Connection failed: " . $conn->connect_error);
 }

    $sql = "CREATE DATABASE IF NOT EXISTS DBRoboticArm";

        If($conn->query($sql) === TRUE) 
        {

            $conn = new mysqli('localhost','root','', 'DBRoboticArm');
                
            $tbl_range = "CREATE TABLE IF NOT EXISTS Motor_Range (
                    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    first_motor INT(11) NOT NULL,
                    second_motor INT(11) NOT NULL,
                    third_motor INT(11) NOT NULL,
                    fourth_motor INT(11) NOT NULL,
                    fifth_motor INT(11) NOT NULL,
                    sixth_motor INT(11) NOT NULL
                    )";

                If($conn->query($tbl_range) === TRUE) 
                    {

                        $firstSlider = $_POST['firstSlider'];
                        $secondSlider = $_POST['secondSlider'];
                        $thirdSlider = $_POST['thirdSlider'];
                        $fourthSlider = $_POST['fourthSlider'];
                        $fifthSlider = $_POST['fifthSlider'];
                        $sixthSlider = $_POST['sixthSlider'];

                        $insert_range = "INSERT INTO Motor_Range (id ,first_Motor, second_Motor, third_Motor, fourth_Motor, fifth_Motor, sixth_Motor) 
                                VALUES ('','$firstSlider', '$secondSlider', '$thirdSlider', '$fourthSlider', '$fifthSlider', '$sixthSlider')";

                        if ($conn->query($insert_range) === TRUE) 
                        {
                            $_SESSION['Status'] = "Data has been saved!";
                            header('location: Robotic Arm Interface.php');
                        } 
                        else 
                        {
                            echo "Error: " . $insert_range . "<br>" . $conn->error;
                        }
                                    
                    }
                    else 
                    {
                        echo "Error: " . $tbl_range . "<br>" . $conn->error;
                    }

            $conn->close();

        } 
        else 
        {
            echo "Error creating database:" . $conn->error;
        }

$conn->close();
?>