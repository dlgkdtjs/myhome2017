<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-04
 * Time: 오전 7:50
 */
include_once './db/db.php';
$idx=$_POST['idx'];
$git_url=$_POST['git_url'];
$password=$_POST['password'];
$home=$_POST['home'];
$sql="update git set git_url='$git_url', password='$password', home='$home', git_url='$git_url' WHERE idx='$idx'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
?>