# SRTS Database

The database is the core of where all of the data is stored in the SRTS system.
This repository does not contain the data itself. Rather, it contains a
description of the database setup used on a Pi with the system, and some
scripts that are used to setup and maintain the database installation.

## 

## MySQL

As mentioned, the database is not a piece of code that we had to write from
scratch. Because a database is usefull for many applications, there are
much smarter teams of people that wrote it for us to use. For us, it was
the MySQL team.

MySQL is a relational database that is used to store data.
Data in a database is stored in tables. Each table is similar to
an excel spreadsheet. The columns represent the different types of data
and each row represents a different linked piece of data. For example,
we have a table of students. The columns are things like a first name, a
last name, and a grade number. Each row represents a different student.

## User Details

The database software, MySQL has users, much like a whole computer, in order to
keep permissions straight. If there are more than one seperate pieces of software
on a computer that use the database, they shouldn't have access to eachother's
data. For our purposes, when using the database, we use the root user because
our software is the major piece on here. It may not be the best practice, but
this is a scanner system on a Raspberry Pi, not a fortune 500 company.

For backwards compatibility with the website that was on the original iteration
of the SRTS scanner (which was directly copied to this iteration), the same
credentials are used. This is because, when a piece of software needs to connect
to the database, it has to use a username and password. In the PHP files of the
website, the username and password are just typed in plaintext in the files.
However, I suspect that this is not the best practice either, but I don't have
time to change it.

Anyways, the credentials are as follows:

```
Username: root
Password: pi
```
Very secure, I know, but what do you want from me.

## Database Layout

MySQL is just really a database hosting program. It can have multiple databases
on a given computer. Like I said before, multiple applications can use MySQL.
All of the stuff for the SRTS system is stored in a database aptly named 'srts'.

This 'srts' database contains four tables at the moment:
### Students
### LastScanned
### Attendence
### srts-config
