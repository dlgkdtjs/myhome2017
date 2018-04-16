<?php
include_once './head.php';
?>
<body>
<?php
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
    <?php
    include_once './header.php';
    ?>
    <div id="container">
        <?php
        foreach ($rows as $result) {
        ?>
        <ul class="p_page">
            <li class="pro">
                <img src="" alt="프로필">
            </li>

                <li><span><a href="http://<?= $result['home'] ?>" target="_blank"><?=$result['name']?></a></span><span ><a
                            href="<?= $result['git_url']?> " target="_blank"><img src="./img/github-logo.png" width="100" alt=""></a></span>
                </li>
                <li class="my_info"></li>
        </ul>
            <?php
        }
        ?>
    </div></div>
</body>

