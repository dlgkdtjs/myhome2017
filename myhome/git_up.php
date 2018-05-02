<!doctype html>
<html lang="ko">
<?php
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php";
    include_once "./db/db.php";
    $id=$_GET['id'];
    $sql="select * from git WHERE id='$id'";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll();
    ?>
    <?php
    foreach ($rows as $result)
    {
    ?>
    <div id="container">
        <form action="./git_update.php" method="post">
            <input type="hidden" value="<?=$result['idx']?>" name="idx">
            <dl class="item_info">
                <dt><label for="id">id</label></dt>
                <dd><span><?=$result['id']?></span></dd>
                <input type="hidden" name='id' value=<?=$result['id']?>>
            </dl>
            <dl class="item_info">
                <dt><label for="name">이름</label></dt>
                <dd><input type="text" id="name" name="name" value=<?=$result['name']?>></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="aname">별칭</label></dt>
                <dd><input type="text" id="aname" name="aname"></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="password">비밀번호</label></dt>
                <dd><input type="password" id="password"  value="<?=$result['password']?>" name="password" "></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="home">HOME</label></dt>
                <dd><input type="text" id="home" value="<?=$result['home']?>" name="home""></dd>
            </dl>
            <dl class="item_info">
                <dt><label for="git_url">git 주소</label></dt>
                <dd><input type="text" id="git_url" value="<?=$result['git_url']?>" name="git_url"></dd>
            </dl>
            <button class="btn_git" type="submit" >수정</button>
        </form>
    </div>
<?php
    }
?>
</div>

</body>
</html>

