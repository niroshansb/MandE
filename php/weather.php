<?php
$dbconn = pg_connect("host=localhost dbname=<> user=<> password=<>");


$Humid=$_POST['Humid'];
$Tempe=$_POST['Tempe'];
$Long=$_POST['Long'];
$Lat=$_POST['Lat'];
$Comm=$_POST['Comm'];
$Smoke=$_POST['Smoke'];

$sql = "INSERT INTO <table> (humid,tempe,long,lat,comment,smoke)
VALUES({$Humid},{$Tempe},{$Long},{$Lat},'{$Comm}',{$Smoke})";

$result = pg_query($sql);
echo "successfully created";
