# SRTS System Setup Guide

In this document, basic instructions for installing and configuring the SRTS
system on a Raspberry Pi. This shuold be done after all of the inital Pi
setup takes place.
Now that all of the baseline stuff has been installed and configured, we can
begin to setup the SRTS Scanning System and install all of the necessary
components.

## Install Git and Clone the Repository

Git is the source control management system used to keep track of the SRTS
System both in its current state and its previous states. That's why we use
source control. So that we can keep track of the changes we make during
development. That way, we can see what changed, and fix it if a change was
made that broke functionallity. Also, it acts as sort of a backup system, so
if the memory card you were working on breaks, your progress can be prevented
from getting lost. Lastly it enables multiple contributors, but for this
project, most programming will probably be don in a group together.

To install git, run:
```bash
sudo apt-get install git
```

Now that git is installed, the reposity can be cloned. Git repositories can
be stored anywhere (actually, any clone of a repo is the entire code base),
but it makes a certain amount of sense to have one centralized host for
consistency. We use bitbucket.

To clone the repository first navigate to the home folder then clone, type:
```bash
cd ~
git clone 
```