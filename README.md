# Robotic-arm-interface

This project is a two part project to design an interface to control a robotic arm and connect the database to the hardware.

The First Part:- Interface for Robotic Arm:

This folder contains the files that create a Database and an Interface that control each motor in a robotic arm and save the angles chosen by the user in the database.

List of files:
1- Robotic Arm Interface.php: this php file creates an interface that allow the user to choose the angles of each motor by moving the sliders in the interface and save the data in the database and then turn on the robotic arm.

2- Run Interface.php: this php file creates an interface that shows the user the angles of each motor when the user clicks RUN.

3- Save_script.php: this php file contains the php script to create a database and motor_range table if non already exists and insert the data from the sliders in the interface into the database.

4- Run_script.php: this php file contains the script to create motor_status table in the database and insert data in it when the user clicks RUN, and also retrieve the angles from the motor_range table to show to the user.

The rest are css and javascript fils to help the interface run smoother.

The Second Part: Database Connection to Hardware:

This folder contains files that create an interface for the user to see each motor's angle based on the data in the database.

List of files:
1- DBConnection Interface.html: This html file creates an interface for the user to choose a motor to see the angle for by clicking that motor button.

Motors_script.php: these php files retrieve the angels data from the database and show them to the user, one motor at a time.

