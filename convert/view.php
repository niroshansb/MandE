<?php

$conn = pg_pconnect("host=localhost port=5432 dbname=<db> user=<user> password=<>");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT <table>, humid, timestamp FROM php");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "tep: $row[0]  humid: $row[1] timestamp:$row[2]";
  echo "<br />\n";
}
 
?>
