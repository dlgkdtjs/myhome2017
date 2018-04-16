<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-05
 * Time: 오후 3:23
 */
include_once "./db/db.php";
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$sql="select * from git WHERE id='$id' AND password=:password";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);
echo($result['name']);
$rows=$stmt->rowCount();

if($rows===0){

echo "<script> alert ('아이디와 비밀번호를 확인하세요');
                 location.href='./index.php'</script>";
}else{
  $_SESSION['name']=$result['name'];
    $_SESSION['id']=$result['id'];
    print_r($_SESSION);
echo "<script>alert('로그인하였습니다.');location.href='./index.php'</script>";

}
?>