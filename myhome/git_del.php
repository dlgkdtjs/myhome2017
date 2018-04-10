<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-03-26
 * Time: 오전 9:50
 */

include_once './db/db.php';
session_start();
$admin=$_SESSION['id'];
$idx=$_POST['idx'];
$up=$_POST['submit'];
if($admin==="hslee22"){
    echo "<script>alert('권한이없습니다.');</script>";
}else{
    $sql = "delete from git where idx=$idx";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
}
echo "<script>location.href='./git_list.php'</script>";

?>

