# SRTS Raspberry Pi Setup/Configuration

The purpose of this file is to provide details as to how the SRTS
Raspberry Pi is set up.

The basis for the system is an installation of Raspbian Lite
(obtained from [raspberrypi.org](raspberrypi.org)).
A fresh installation of Raspbian Lite can be made from the image on the site.
There are many setup steps taken from the fresh installation to a fully
functional system.

## Initial Setup

From a fresh installation of Raspbian lite, a few things need to be done before
it is very useful. To start with, you'll probably need a keyboard, HDMI to
VGA cable, and a monitor (or a TV with HDMI) in order to do the setup.
Also, you'll need an internet connection. The easiest way to do that is find
an ethernet cord somewhere. After the remote things are configured, not all
of this will be necessary, but they might be.

### Localisation
After a fresh install of Raspian or Raspian Lite, because the Raspberry Pi was
created by some fabulous British people, the default 'locale' as it's called is
set to "en-GB.UTF-8". That means it will use Brittish English language packages
instead of US English. The same is true for the keyboard layout, which has even
more of an impact. To correct the localization, there is a Raspberry Pi
Raspian configuration tool.

At first boot, before anything else is done, run

```bash
sudo raspi-config
```

In the menu, go into "Localisation Options" then go into "Change Locale".
Scroll through the locales until you are on the one "en-US.UTF-8 UTF-8",
and press SPACE to make the '*' appear next to it. Then, hit ENTER.
On the next page, choose this new locale as the default locale and hit ENTER.
That should be it for locale changing.

Next, keyboard layout needs to be changed, so go back into
"Localisation Options", but this time go into "Change Keyboard Layout".
Select "Generic 105-key (Intl) PC" and hit ENTER.

The last Localization Option that needs to be changed is the timezone, but this
should be self explanatory.

After setting all of these, you should probably restart the Raspberry Pi with

```bash
sudo shutdown -r now
```

After that, before continuing it will be beneficial to update all of the
software installed on the Pi (it is good to do this periodically too).

```bash
sudo apt-get update
sudo apt-get upgrade
```

### Remote Shell (SSH)
SSH or Secure SHell is an ancient protocol for controlling UNIX-like operating
systems via a remote command line interface. SSH is installed on Raspbian
Lite, but disabled by default, so to enable it, run

```bash
sudo raspi-config
```

and go to option 5 "Interfacing Options". In the menu, you'll see SSH. Go in
to the menu and enable it. Now, you can use SSH to access the Raspberry Pi
remotely. You need to know the Pi's IP Address (get by running ifconfig)
and be connected to the same network as the Pi. You'll also need an SSH
client. If you're on OSX or Linux, you're in luck because it's installed by
default. If you're on Windows, use PUTTY, it's one of the best out there.

## Developer Setup

For development purposes, it is useful to have certain programs installed to
make interacting with the Pi and writing programs on the Pi easier. These
things are optional, but will make maintenance and development less painful.
All the instructions for these can be found in the
[Developer Setup Guide](DEV_SETUP.md)
