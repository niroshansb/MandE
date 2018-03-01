import urllib2, urllib
mydata=[('Tempe','1.5'),('Humid','2.6')]   
mydata=urllib.urlencode(mydata)
path='http://localhost/php/weather.php'   
req=urllib2.Request(path, mydata)
req.add_header("Content-type", "application/x-www-form-urlencoded")
page=urllib2.urlopen(req).read()
print page
