<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
    <head>
        <meta charset="UTF-8">
        <TItle>Robotic Arm Interface</TItle>
        <link rel="stylesheet" href="css/style.css">
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
                <br>
                <div style="color:green">   
                <strong>Success!</strong> <?php echo $_SESSION['Run'];?>
                </div>
                <?php

                unset($_SESSION['Run']);
            }
            ?>

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