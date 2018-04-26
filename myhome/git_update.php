<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-04
 * Time: 오전 7:50
 */
include_once './db/db.php';
$id=$_POST['id'];
$git_url=$_POST['git_url'];
$password=$_POST['password'];
$home=$_POST['home'];
$aname=$_POST['aname'];
$sql="update git set aname='$aname',git_url='$git_url', password='$password', home='$home', git_url='$git_url' WHERE id='$id'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
?>