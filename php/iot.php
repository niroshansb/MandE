<?php
$dbconn = pg_connect("host=localhost dbname=<> user=<> password=<>");

$Long=$_POST['Long'];
$Lat=$_POST['Lat'];
$Tempe=$_POST['Tempe'];
$Humid=$_POST['Humid'];


$sql = "INSERT INTO <table> (long,lat,humid,tempe)
VALUES({$Long},{$Lat},{$Humid},{$Tempe})";

$result = pg_query($sql);
echo "successfully created";
