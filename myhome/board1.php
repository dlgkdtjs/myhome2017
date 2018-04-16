<?php
session_start();
?>
<!doctype html>
<html lang="ko">
<?php
if(isset($_SESSION['name'])) {
    include_once './db/db.php';
    $sql = "select * from board1";
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
                    <th>첨부파일</th>
                </tr>
                <?php
                foreach ($rows as $result) {
                    ?>
                    <tr>
                        <td><?= $result['idx'] ?></td>
                        <td><?= $result['title'] ?></td>
                        <td><span class='down'><a href="./down.php?file=<?= $result['file'] ?>">다운로드</a></span></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
