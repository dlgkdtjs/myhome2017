<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-11
 * Time: 오전 9:50
 */
session_start();
include_once "./db/db.php";
$homework=$_POST['homework'];
$sql="insert into admin (homework) VALUES ('$homework')";
$stmt=$pdo->prepare($sql);
$stmt->execute();
echo "<script>location.href='./admin.php'</script>";
?>