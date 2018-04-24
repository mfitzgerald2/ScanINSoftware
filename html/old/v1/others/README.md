# SRTS System

A scanning system hosted on a Raspberry Pi used to track and reward student
participation in the Safe Routes to School program. The scanner is an
RFID Reader connected through serial (converted input to GPIO). The reward
comes through the LED matrix which gives a flashy light show and kudos to
students when they participate.
There is also a website hosted on the Pi to manage the scanner system.
This is intended to be an extednable system open to future features.

## System Components

There are three distinct components of the system found in this repository:

* [Scanner](scanner/) - The code that drives the student scanning interaction.
* [Database](database/) - The place where the data is stored. Acts as the
bridge between the scanner and website.
* [Website](website/) - The website used for administrarive, bookeeping,
and configuration interaction.

## System Setup and Configuration

Follow the [Pi Setup Guide](PI_SETUP.md) to configure a Pi from scratch
or learn about how the existing Pi (version 2) is configured.

After your Pi has its baseline setup and configuration done, installing and
configuring the SRTS system can be done.
Follow the [SRTS System Setup Guide](SRTS_SETUP.md) to get the repository
cloned to the Pi and ready to run or develop on.
