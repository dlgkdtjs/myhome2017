<!doctype html>
<html lang="ko">
<?php
session_start();
include_once './db/db.php';
include_once "./head.php";
if(!isset($_SESSION['name'])) {
    echo "<script>alert('권한이 없습니다.');</script>";
    echo "<script>history.back();</script>";
}
if(isset($_GET['ok'])){
    $ok=$_GET['ok'];
    $sql = "select * from board WHERE ok='$ok'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
}else{
    $sql = "select * from board";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
}

?>
<body>
<div id="wrap">
    <?php
        include_once './header.php';
    ?>
    <div id="container">
        <div id="table_wrap">
        <table>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>이름</th>
                <th>첨부파일</th>
                <th>수정</th>
                <th>삭제</th>
            </tr>
            <?php
            foreach ($rows as $result) {
                ?>
                <tr>
                    <td><?= $result['idx'] ?></td>
                    <td><?= $result['title'] ?></td>
                    <td><?= $result['name'] ?></td>
                    <td><?php if($result['name']==$_SESSION['name']){ ?>
                    <span class='down'><a href="./down.php?file=<?= $result['file'] ?>">다운로드</a></span>
                    <?php }else{echo"다운로드";}?></td><td><?php if($result['name']==$_SESSION['name']){ ?>
                    <span class='down'><a href="./upboard.php?idx=<?=$result['idx']?>">수정</a></span>
                    <?php }else{echo"수정";}?></td><td><?php if($result['name']==$_SESSION['name']){ ?>
                    <span class='down'><a href="./delboard.php?idx=<?=$result['idx']?>">삭제</a></span>
                    <?php }else{echo"삭제";}?></td>
                </tr>
                <?php
            }
            ?>
        </table>
            <div id="w_btn"><a href="./bwrite.php?ok=<?=$ok?>">글쓰기</a></div>
        </div>
    </div>
</div>
</body>
