# Welcome to ScanINSoftware!

This is the repo for all of the software on the Purdue EPICS SRTS TEAM System.


# HTML

This is the area where all of the PHP code for the back end website as well as the front panel display is stored. 


# Pi

This is where all of the drivers for the scanner and python processing code resides.


# Current Status

The current status of the software is that it works in production, but needs a team member to start the system and maintain it. 

# Future Development

•	Make a development ScanIN system
•	Create startup script
•	Develop a text message sending service to let parents know when their student is at school.
•	Develop smart device controls from front end
•	Integrate hardware switches to software control


# HOW TO SETUP
1.	Image Raspian on a new SD card. Download the latest version here: https://www.raspberrypi.org/downloads/raspbian/
2.	Insert the SD. Change the keyboard layout as described here: https://thepihut.com/blogs/raspberry-pi-tutorials/25556740-changing-the-raspberry-pi-keyboard-layout
3.	Install the lamp stack on the pi from here: https://projects.raspberrypi.org/en/projects/lamp-web-server-with-wordpress STOP BEFORE INSTALLING WORDPRESS
4.	Locate the SRTS-Software files from Matt Fitzgerald on his GitHub: 
5.	Open terminal. Type sudo chmod 777 /var/www/html
6.	Copy all of the contents from the html to /var/www/html
7.	Copy all of the contents from the pi to /home/pi
8.	Create a database named srts_system
9.	Create a database named srts_migrated
10.	Import the sql backup by going to the directory with the backup in the terminal and type 
a.	mysql -u root -p srts_migrated < srts_migrated.sql
b.	mysql -u root -p srts_system < srts_system.sql
11.	Restart apache by typing sudo service apache2 restart
12.	Start the pi scanning dameon by sudo python /SRTS_Code/RFID_Controller.py
13.	Open chromium and navigate to localhost/frontpage
14.	Enjoy your new system!
