<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-10
 * Time: 오후 2:08
 */
session_start();
session_destroy();
echo "<script>alert('로그아웃되었습니다.')</script>";
echo "<script>location.href='./'</script>";
?>