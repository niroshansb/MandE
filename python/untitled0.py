#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Created on Wed Feb 28 10:38:18 2018

@author: niroshan
"""

import serial
import urllib2, urllib
ser = serial.Serial('/dev/ttyACM0', 9600)
while True:
    sm = ser.readline()
    tp, hm =sm.split('|')
    print tp
##print 'seperate'
    print hm
    
    mydata=[('Long',tp),('Lat',hm),('Tempe',hm),('Humid',hm)]
    mydata=urllib.urlencode(mydata)
    path='http://localhost/php/iot.php'
    req=urllib2.Request(path, mydata)
    req.add_header("Content-type", "application/x-www-form-urlencoded")
    page=urllib2.urlopen(req).read()
    print page
