<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
    <head>
        <meta charset="UTF-8">
        <TItle>Robotic Arm Interface</TItle>
        <link rel="stylesheet" href="css/style.css">

        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: auto;
            margin:20px auto 20px;
            }

            td, th {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #93da9cad;
            }

        </style>
    </head>
    <body>   
       <nav>
           <img src="logo.png" alt="SM logo" style="width: 180px;">
       </nav>

         <?php
            if(isset($_SESSION['Run']))
            { 
                ?>
                <br>
                <div style="color:blue">   
                <strong>Success!</strong> <?php echo $_SESSION['Run'];?>
                </div>
                <?php

                unset($_SESSION['Run']);
            }
            ?>

            <div><h3>Angles for each Motor:</h3></div>
            <?php
            if(isset($_SESSION['Angles']))
            { 
                ?>
                <br> 
                <?php echo $_SESSION['Angles'];?>
                <?php

                unset($_SESSION['Angles']);
            }
            ?>

            <br>
            <br>

            <button id ="backBtn"class="action-button"> Go Back </button>
               
        
        <footer>
                Copyright &copy 2021 Smart Methods. All Rights Reserved.
        </footer>

        <script>
            var btn = document.getElementById('backBtn');
            btn.addEventListener('click', function() {
            document.location.href = 'Robotic Arm Interface.php';
            });
        </script>

              
    </body>
</html>