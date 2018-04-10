<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-05
 * Time: 오전 11:04
 *
 */
session_start();
?>
<div id="login">
<form action="./login_ok.php" method="post">
    <dl>
        <dt><label for="id">아이디</label></dt><dd><input type="text" id="id" name="id"></dd>
        <dt class="pw"><label for="password">비밀번호</label></dt><dd><input type="password" id="password"name="password"></dd>
    </dl>
    <button id="login_btn" type="submit">로그인</button>

</form>
<a href="#" id="close"><span class="blind">닫기</span></a>
</div>
