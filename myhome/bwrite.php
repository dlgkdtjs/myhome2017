<!doctype html>
<html lang="ko">
<?php
include_once "./db/db.php";
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php";
    ?>
    <div id="container">
<form action="./binsert.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="ok" value="<?=$_GET['ok']?>">
    <dl>
        <dt><label for="title">제목</label></dt>
        <dd><input type="text" id="title" name="title"></dd>
        <dt><label for="contents">내용</label></dt>
        <dd><textarea name="contents" id="contents" cols="30" rows="10"></textarea></dd>
        <dt><label for="upload">첨부파일</label></dt>
        <dd><input type="file" name="upload" id="upload"></dd>
    </dl>
    <button type="submit">작성</button>
</form>
    </div>
</div>
</body>