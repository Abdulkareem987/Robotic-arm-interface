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
                    $_SESSION['Run'] = "Motors are Running <br>";
                    header('location: Run Interface.php');
                    
                } 
                else 
                {
                    echo "Error: " . $update_status . "<br>" . $conn->error;
                }

                $sql = "SELECT first_motor, second_motor, third_motor, fourth_motor, fifth_motor, sixth_motor FROM motor_range ORDER BY id DESC LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) 
                    {
                        $_SESSION['Angels'] = "First Motor = " . $row["first_motor"]."° <br> Second Motor: " . $row["second_motor"]."° <br> Third Motor: " . $row["third_motor"].
                        "° <br> Fourth Motor: " . $row["fourth_motor"]."° <br> Fifth Motor: " . $row["fifth_motor"]."° <br> Sixth Motor: " . $row["sixth_motor"].
                         "°";
                        header('location: Run Interface.php');
                    }
                    
                }
                else {
                    echo "0 Results.";
                }
                            
            }
            else 
            {
                echo "Error: " . $tbl_status . "<br>" . $conn->error;
            }

$conn->close();
?>