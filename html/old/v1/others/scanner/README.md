# Scanning Subsystem

This scanning protocol subsystem drives the student interaction portion of
the SRTS system. The main portion waits for an RFID tag to be scanned.
When a tag is scanned, the number is checked against the database. If a
student hasn't been marked that day, the student's attendence is updated
in the database, and the LED Matrix is prompted on to display a message.

## Required Packages

For the scanning component, the following packages are installed:

```bash
Python
sudo apt-get install python2.7-dev

Python MySQL Bindings
sudo apt-get install python-mysqldb

Python Imaging Library (Pillow)
sudo apt-get install python-pillow
```

Note: Recommend installing database component (MySQL) first.

## Components

Written primarily in Python, this system controls several components
that together make up the scanning protocol.

* [RFID](rfid/) - Code that drives the RFID scanner serial reads.
* [Matrix](matrix/) - Code that drives the LED matrix on the front of the
system.

