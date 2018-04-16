<?php
session_start();
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
$sql="select * from git WHERE id='$id' AND password=:password";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['name']=$result['name'];
echo "<script>location.href='/'</script>";
?>