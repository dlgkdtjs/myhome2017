<?php
$file=$_GET['file'];
include_once "./db/db.php";
$filepath = "$file";
$filesize = filesize($filepath);
$path_parts = pathinfo($filepath);
$filename = $path_parts['basename'];
$extension = $path_parts['extension'];

header("Pragma: public");
header("Expires: 0");
header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename='.iconv('UTF-8','CP949',$filename));
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");
readfile($filepath);


?>