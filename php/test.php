<?php



// Create connection
//$conn = pg_connect($servername, $username, $password, $dbname);
$dbconn = pg_connect("host=localhost dbname=<> user=<> password=<>");
//echo "connected";
// Check connection
//if ($dbconn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}



$tempe=$_POST['tempe'];
$humid= $_POST['humid'];
$lang = $_POST['lang'];
$lat= $_POST['lat'];


$sql = "INSERT INTO <table> (tempe,humid,lang,lat)
VALUES ({$tempe},{$humid},{$lang},{$lat})";


//$dbconn ->exec($sql);
$result = pg_query($sql); 
echo "New record created successfully";


$dbconn->close();
?> 
