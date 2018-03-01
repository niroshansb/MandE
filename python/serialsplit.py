#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Created on Wed Feb 28 10:59:58 2018

@author: niroshan
"""

import serial
ser = serial.Serial('/dev/ttyACM0', 9600)
lon = 135.48233
lat = 34.55242
while True:
    sm = ser.readline()
    tep,humid  =sm.split('|')
    print lon
    print lat
    print tep
    print humid