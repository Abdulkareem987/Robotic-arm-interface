<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "DBRoboticArm";

$conn = new mysqli( $servername, $username, $password, $db);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

   $tbl_status = "CREATE TABLE IF NOT EXISTS Motor_Status (
       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       motor_on BOOL 
   )";

            If($conn->query($tbl_status) === TRUE) 
            {

                

                $insert_status = "INSERT INTO Motor_Status (motor_on) 
                        VALUES (true)
                        ";

                if ($conn->query($insert_status) === FALSE) 
                {
                    echo "Error: " . $update_status . "<br>" . $conn->error;
                    
                } 

                $last_id = $conn->insert_id;

                $update_status = "UPDATE Motor_Status SET motor_on = 'false'
                                  Where id != $last_id
                        ";

                if ($conn->query($update_status) === TRUE) 
                {
                    echo "Success!";
                } 
                else 
                {
                    echo "Error: " . $update_status . "<br>" . $conn->error;
                }
                            
            }
            else 
            {
                echo "Error: " . $tbl_status . "<br>" . $conn->error;
            }

$conn->close();
?>