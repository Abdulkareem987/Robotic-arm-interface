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

         <div class="heading"> 
             <h3>Please Select the Range for Each Motor:</h3>
         </div>

         <?php
            if(isset($_SESSION['Status']))
            { 
                ?>
                
                <div style="color:blue">   
                <strong>Success!</strong> <?php echo $_SESSION['Status'];?>
                </div>
                <?php

                unset($_SESSION['Status']);
            }
            ?>
         <form name="rangeForm" method="POST" action="Save.php">
            
        <div class="flex-container">
            <div class="flex-child">
                <h4 style="font-family: 'poppins';">First Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="firstSlider" min="0" max="180" value="90" class="slider" id="First">
                    <p>Value: <span id="Value1"></span>°</p>
                </div>
            </div>

             <div class="flex-child">
                <h4 style="font-family: 'poppins';">Second Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="secondSlider" min="0" max="180" value="90" class="slider" id="Second">
                    <p>Value: <span id="Value2"></span>°</p>
                </div>
             </div>
          
        </div>

        <div class="flex-container">

            <div class="flex-child">
                <h4 style="font-family: 'poppins';">Third Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="thirdSlider" min="0" max="180" value="90" class="slider" id="Third">
                    <p>Value: <span id="Value3"></span>°</p>
                </div>
             </div>

             <div class="flex-child">
                <h4 style="font-family: 'poppins';">Fourth Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="fourthSlider" min="0" max="180" value="90" class="slider" id="Fourth">
                    <p>Value: <span id="Value4"></span>°</p>
                </div>
             </div>
          
        </div>

        <div class="flex-container">

            <div class="flex-child">
                <h4 style="font-family: 'poppins';">Fifth Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="fifthSlider" min="0" max="180" value="90" class="slider" id="Fifth">
                    <p>Value: <span id="Value5"></span>°</p>
                </div>
             </div>

             <div class="flex-child">
                <h4 style="font-family: 'poppins';">Sixth Motor:</h4>
                <div class="slidecontainer">
                    <input type="range" name="sixthSlider" min="0" max="180" value="90" class="slider" id="Sixth">
                    <p>Value: <span id="Value6"></span>°</p>
                </div>
             </div>
          
        </div>
             <table>
               <input type="submit" name="save" class="action-button" value="Save" /> </form>
               <form action="Run.php">
               <input type="submit" name="turn on" style="vertical-align:top" class="action-button" value="Turn On" /> </form>
               </table>
        
        <footer>
                Copyright &copy 2021 Smart Methods. All Rights Reserved.
        </footer>
              
        <script src="JS/script.js"></script> 
    </body>
</html>