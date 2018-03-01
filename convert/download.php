<?php
//$file =$_POST['fdname'][".xml"];
$mask =".xml";
$path='/home/niroshan/odk/';
$fileN=$_POST['text'];
$file = $path . $fileN . $mask;
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);

    unlink($file);
    
    array_map('unlink' , glob("$path*.xls"));
    //unlink($ofile);
    exit;
    echo "The file is downloaded";
}else {
    echo "The file does not exist";
   // echo $fileN;
   // echo $mask;
   // echo $path;
}
//array_map( "unlink", glob( $mask ) );
?>
