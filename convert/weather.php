<?php
$dbconn = pg_connect("host=localhost dbname=<db> user=<> password=<>");

$Tempe=$_POST['Tempe'];
$Humid=$_POST['Humid'];


$sql = "INSERT INTO <table> (tep,humid)
VALUES({$Tempe},{$Humid})";

$result = pg_query($sql);
echo "successfully created";

