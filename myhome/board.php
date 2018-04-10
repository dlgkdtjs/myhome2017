<!doctype html>
<html lang="ko">
<?php
session_start();
if(isset($_SESSION['name'])) {
    include_once './db/db.php';
    $sql = "select * from board";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll();
    include_once "./head.php";
}else{
    echo "<script>alert('권한이 없습니다.');</script>";
    echo "<script>location.href='/';</script>";
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
            </tr>
            <?php
            foreach ($rows as $result) {
                ?>
                <tr>
                    <td><?= $result['idx'] ?></td>
                    <td><?= $result['title'] ?></td>
                    <td><?= $result['name'] ?></td>
                    <td><?php if($result['name']==$_SESSION['name']){ ?>
                            <span class='down'><a href="<?= $result['file'] ?>">다운로드</a></span>
                        <?php }else{echo"다운로드";}?></td>
                </tr>
                <?php
            }
            ?>
        </table>
            <div id="w_btn"><a href="./bwrite.php">글쓰기</a></div>
        </div>
    </div>
</div>
</body>
