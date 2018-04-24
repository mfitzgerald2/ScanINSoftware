#!/bin/bash
set -e 
chromium-browser --noerrordialogs --kiosk http://localhost/frontpage/ --incognito
sudo python /home/pi/Desktop/SRTS_Code/RFID_Controller.py
