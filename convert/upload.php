<HTML>
<HEAD>
<TITLE>Confirm Database Insert</TITLE>
</HEAD>
<BODY>
<p> Converting the file to xml </p>
<?php
$target_dir = "/home/niroshan/odk/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fpath = pathinfo( $target_file );
$fname = $fpath['filename'];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    if($check !== false) {
        echo "Status - ";
        $uploadOk = 1;
    } else {
        echo "File is not an xls file.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



// Allow certain file formats
if($imageFileType != "xls"  ) {
    echo "Sorry, only xls files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if ( $uploadOk != 0) {
   // $command = escapeshellcmd('/Library/WebServer/Documents/php/xls2xml.py');
        //$output = shell_exec($command);
        //echo $output;
        $outn = $target_file;
        //$outf = '$target_dir .basename($_FILES["fileToUpload"][".xml"])';
        //$spa= " ";
	//$fname = echo $target_file['filename'];
        $output = passthru("python xls2xform.py " . $outn . " /home/niroshan/odk/$fname.xml");
        echo $output;
//start think about this code
        //if ( $output != 0) {
          //     echo " And your file is converted.";
        //} else {
          //        echo "Sorry, there was an error uploading your file.";
         //}    
// end think about this code

    //echo " And your file is converted.", "\n"; 
   // echo $fpath['filename'];
   // echo $fname;
   // echo $target_file;

}

?>

<form action="download.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="text" value= "<?php echo $fname; ?>">
<input type="submit" name="submit" value="Download">
</form>

</BODY>
</HTML>

