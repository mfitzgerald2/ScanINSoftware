# Matrix (SRTS-System)

This 'matrix' subdirectory contains all of the software responsible for driving the LED matrix display on the SRTS Scanning system. The matrix can be used to display any information, but for now it is used to display student names in the form of a reinforcing message when they are scanned for the first time.

## About the Matrix

The LED matrix used in the SRTS project is one sold by adafruit, as of now the dimensions are 64x32 RGB LEDs.
A Raspberry Pi hat (A circut board that attatches to the GPIO on the Pi) is used to convert the signal into one that plugs directly into the matrix.
This hat, in addition to having the matrix conversion and connection, also has a Real Time Clock in order to keep time when the Pi is off (more on this elsewhere)
The library used to display things on the matrix through GPIO is originally hosted on GitHub, and can be found [here](https://github.com/hzeller/rpi-rgb-led-matrix).

## Installing the Matrix Library

At the time of this documentation, the [hzeller/rpi-rgb-led-matrix](https://github.com/hzeller/rpi-rgb-led-matrix) is used to interact with the LED Matrix.
This library needs to be installed for the matrix to work, so follow these directions, and all should be well.

First, go to the home directory, and clone the repository. Then, make the library and specify the Adafruit Hat wiring layout.

```bash
cd ~
git clone https://github.com/hzeller/rpi-rgb-led-matrix
cd rpi-rgb-led-matrix
sudo HARDWARE_DESC=adafruit-hat make install-python
```

Theoretically, that should do the trick and the library can be used from anywhere, but this documentation will be updated when that is confirmed.

## Matrix and Python Usage
The Adafruit Matrix library is written in c++, but uses Python language bindings to make the hardware accessible to users of Python, which we are.

