<?php

$conn = pg_pconnect("host=localhost dbname=<> user=<> password=<>");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT long, lat, humid, tempe, timestamp FROM <table>");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "long:, $row[0] , lat:, $row[1] , humid:, $row[2] , tempe:, $row[3] , time:, $row[4]";
  echo "<br />\n";
}

?>

