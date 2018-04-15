<?php
include_once './head.php';
?>
<body>
<?php
include_once "./header.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./db/db.php";
$id=$_SESSION['id'];
$sql="select * from git";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
?>
<div id="wrap">
    <div id="container">
        <table id="mypage">
            <tr>
                <th>이름</th>
                <th>깃주소</th>
            </tr>
            <?php
            foreach ($rows as $result) {
                ?>
                <tr><td><a href="http://<?= $result['home'] ?>" target="_blank"><?=$result['name']?></a></td><td ><a
                            href="<?= $result['git_url']?> " target="_blank"><img src="./img/github-logo.png" width="100" alt=""></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div></div>
</body>

