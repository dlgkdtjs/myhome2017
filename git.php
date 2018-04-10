<!doctype html>
<html lang="ko">
<?php
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php"
    ?>
    <div id="container" class="join">
        <form action="./git_insert.php" method="post">
            <dl class="item_info">
                <dt><label for="id">id</label></dt>
                <dd><input type="text" id="id" name="id"></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="password">비밀번호</label></dt>
                <dd><input type="password" id="password" name="password""></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="name">이름</label></dt>
                <dd><input type="text" id="name" name="name"></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="home">HOME</label></dt>
                <dd><input type="text" id="home" name="home""></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="git_url">git 주소</label></dt>
                <dd><input type="text" id="git_url" name="git_url""></dd>
            </dl>
            <button class="btn_git" type="submit" >확인</button>
        </form>
    </div>

</div>

</body>
</html>

