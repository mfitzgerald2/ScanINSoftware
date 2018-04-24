# SRTS Website

A website hosted on a Raspberry Pi used to interact with the Safe Routes to
School RFID scanning system. The website is the interface through which
students are configured in the system, the system can be configured,
and data about scans can be retrieved.

## Required Packages

The following packages need to be installed on Raspbian before the
website will work. I recommend doing a 'sudo apt-get update' before
installing anything.

```bash
Apache Web Server
sudo apt-get install apache2

PHP 5
sudo apt-get install php5 libapache2-mod-php5
```

Note: Recommend installing database component (MySQL) first.

## Linking the Website Root

The default root directory for a website hosted with Apache Web Server
is the directory /var/www/html on the pi. However, with the website in this
repository, this is not ideal. Luckily we can use a link to link the directory
from the repository to the root directory.
This is done with a symbolic link:

```bash
sudo ln -fs ~/srts-system/website /var/www
```

## Authors

* **Kevin Hunkler** - *Original HTML/PHP Author* [khunckl@purdue.edu](mailto:khunckl@purdue.edu)
