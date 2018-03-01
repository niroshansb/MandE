<!DOCTYPE html>
<html>
<body>
 
<?php

#$x = 5 /* + 15 */ + 5;
#echo $x;

$contents = file_get_contents('/usr/local/bin/odk.sh');
echo shell_exec($contents);

?>
 
</body>
</html>
