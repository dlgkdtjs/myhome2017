<?php
include_once "./db/db.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);
$id=$_POST["id"];
$name=$_POST['name'];
$git_url=$_POST["git_url"];
$password=$_POST['password'];
$home=$_POST['home'];
$sql="insert into git (id,password,name,home,git_url) VALUES ('$id','$password','$name','$home','$git_url')";
$stm=$pdo->prepare($sql);
$stm->execute();
echo "<script>location.href='./git_list.php'</script>";
?>