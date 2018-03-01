<?php



// Create connection
//$conn = pg_connect($servername, $username, $password, $dbname);
$dbconn = pg_connect("host=localhost dbname=<> user=<> password=<>");
//echo "connected";
// Check connection
//if ($dbconn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}



$Name=$_POST['Name'];
$Email= $_POST['Email'];
$Translp = $_POST['Trans'];
$Lang= $_POST['Lang'];
$Long= $_POST['Long'];
$Lat= $_POST['Lat'];


$sql = "INSERT INTO <table> (name,email,trans,lang,long,lat)
VALUES ('{$Name}','{$Email}','{$Translp}',{$Lang},{$Long},{$Lat} )";


//$dbconn ->exec($sql);
$result = pg_query($sql); 
echo "New record created successfully";


$dbconn->close();
?> 
