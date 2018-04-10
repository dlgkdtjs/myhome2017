<?php
session_start();
include "./db/db.php";
$name=$_SESSION['name'];
$title=$_POST['title'];
$contents=$_POST['contents'];
$file=$_FILES['upload']['name'];
$file_tmp=$_FILES['upload']['tmp_name'];
$file_path="./up/$file";
$time=md5(microtime());
$r=move_uploaded_file($file_tmp,$file_path);
$sql="insert into board (name,title,contents,file) VALUES ('$name','$title','$contents','$file_path')";
$stm=$pdo->prepare($sql);
$stm->execute();
echo "<script>location.href='board.php';</script>";
/*파일업로드
$file = $_FILES['upload']['name'];
$file_dir = $_SERVER['DOCUMENT_ROOT'].'\\fileupload\\\\up\\';
$time = md5(microtime());
$img_dir = "/fileupload/up/".$time.$file;
$file_path = $file_dir.$time.$file;

if($_FILES['upload']['size']<10000000){
    move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
    //echo "<script>location.href='sub1.php';</script>";
}else{
    echo "<script>alert('첨부파일 용량초과');</script>";
}

$sql = "insert into board set title='{$_POST['title']}',writer='{$_POST['writer']}',content='{$_POST['content']}',upload='{$img_dir}'";
$go = $pdo->query($sql);
*/
?>