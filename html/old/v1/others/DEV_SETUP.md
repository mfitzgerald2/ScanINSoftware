# SRTS Raspberry Pi Developer Setup

This document's purpose is to outline how to setup a Raspberry Pi for easier
developer interaction.
Basically, this is just going to go through how to install and use certain
pieces of software that will make interacting with the Pi feel more natural.

Note: This part of the setup is optional. If you're setting up a Pi that you
do not plan on developing on (just cloning the system), then none of this is
really necessary.

At this juncture, the only thing that this doc will really talk about are:
* Desktop Environment - A fundamental GUI to interact with the Pi in a more
friendly and familiar way.
* Remote Desktop - A method of connecting to the desktop environment through
a network.
* Visual Studio Code - A code editor that is more natural to use and feature
rich than a command line editor (like vim or emacs)


## Desktop Environment

Starting with an installation of Raspian Lite is better for our embedded
environment, however this has the drawback of not having a graphical desktop
environment. If you plug the Pi into a monitor and boot up, the entire
screen is a single command line window, and that's all you get.
There are utilities that allow you to turn the single command line into multiple
command lines (tmux and GNU screen), but these are still not ideal especially
for beginners. Luckily, because of the modularity of Linux, a lighter weight
desktop environment can be installed.

### Installation
First, install the xorg xserver and xinit utilities:

```bash
sudo apt-get install --no-install-recommends xserver-xorg
sudo apt-get install --no-install-recommends xinit
```

Then, any choice of desktop environment can be made, but I chose Mate because
it's simple and easy to understand.

```bash
sudo apt-get install mate-desktop-environment-core
sudo apt-get install mate-themes
```

### Usage
Now, the Raspberry Pi has a desktop environment, but you will notice that
on reboot, it still shows up with the command line. This is on purpose,
because we don't want the desktop running by default. So, to use the desktop
environment, login and run the command

```bash
startx
```

The environment will pop up and you can use a mouse and open multiple windows
and do all of the cool things.


## Remote Desktop

Now that we have a desktop environment, it can be a lot easier to develop
things, but we can make it easier. It would be nice to not have to plug a
mouse, keyboard, and monitor into the Pi every time we had to use it.
This is where remote desktop comes into play.

### Installation
The Pi has access to RealVNC for a remote desktop. Install it by running

```bash
sudo apt-get update
sudo apt-get install realvnc-vnc-server realvnc-vnc-viewer
```

Then, set it up to run on startup by using raspi-config again:

```bash
sudo raspi-config
```

Navigate to "Interfacing Options" and enable it the way that SSH was enabled.

Download and install real vnc viewer on your own computer to use it with the Pi.

### Usage
Now, because you'll probably want a remote desktop when there's no actual
desktop, you have to start a virtual one via SSH before you can connect
to a Pi with vnc viewer. To start a virtual desktop, in SSH run

```bash
vncserver -geometry WIDTHxHEIGHT
```

Where WIDTH and HEIGHT are the resolution you wan the desktop to be.
I usually go with 720p (1280x720) or 1080p (1920x1080).

When you run remotely, the address that you connect to with your viewer will
be the IP address of the pi then ':' followed by the number reported when
you run 'vncserver' (usually 1).

To destroy a virtual desktop run

```bash
vncserver -kill :<display-number>
```


## Visual Studio Code

