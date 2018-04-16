<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./db/db.php";
$id=$_SESSION['id'];
$sql="select * from board WHERE id='$id'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<?php
include_once './head.php';
?>
<div id="wrap">
    <?php
    include_once "./header.php";
    ?>
    <div id="container">
        <ul>
            <?php
            foreach ($rows as $result) {
                ?>
                <li><span><?= $result['title'] ?></span><span class='down'><a
                                href="<?= $result['file'] ?>">다운로드</a></span>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>