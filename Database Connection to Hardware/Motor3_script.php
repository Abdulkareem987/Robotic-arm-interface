<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "DBRoboticArm";

$conn = new mysqli( $servername, $username, $password, $db);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

                $sql = "SELECT third_motor FROM motor_range";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) 
                    {
                        echo "Third Motor = " . $row["third_motor"]."°";
                        
                    }
                    
                }
                else {
                    echo "0 Results.";
                }
                            
          

$conn->close();
?>