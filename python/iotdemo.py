#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Created on Wed Feb 28 11:03:43 2018

@author: niroshan
"""

import serial
import urllib2, urllib

ser = serial.Serial('/dev/ttyACM1', 9600)
lon = 135.48233
lat = 34.55242
while True:
    sm = ser.readline()
    tep,humid  =sm.split('|')
    print lon
    print lat
    print tep
##print 'seperate'
    print humid
    
    mydata=[('Long',lon),('Lat',lat),('Tempe',tep),('Humid',humid)]
    mydata=urllib.urlencode(mydata)
    path='http://localhost/php/iot.php'
    req=urllib2.Request(path, mydata)
    req.add_header("Content-type", "application/x-www-form-urlencoded")
    page=urllib2.urlopen(req).read()
    print page
