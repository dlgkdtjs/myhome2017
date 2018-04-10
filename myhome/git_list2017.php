<!doctype html>
<html lang="ko">
<?php
include_once "./db/db.php";
$sql="select * from git where id LIKE '17%'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
//print_r($rows);
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php"
    ?>
    <div id="container">
        <form action="git_del.php" method="post">
            <table>
                <tr>
                    <th>아이디</th>
                    <th>이름</th>
                    <th>HOME</th>
                    <th>GIT</th>
                </tr>
                <?php
                foreach ($rows as $result) {
                    ?>
                    <tr>
                        <td><input type="checkbox" value="<?=$result['idx']?>" name="idx"></td>
                        <td><?= $result['id'] ?></td>
                        <td><?= $result['name'] ?></td>
                        <td></td>
                        <td><a href="<?= $result['git_url'] ?>" target="_blank"><?= $result['git_url'] ?></a></td>
                        <td><button type="submit" name="submit" value="30">수정</button></td>
                        <td><button type="submit" value="15">삭제</button></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </div>

</div>

</body>
</html>