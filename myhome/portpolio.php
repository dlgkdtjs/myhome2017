<?php
include_once './head.php';
?>
<body>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "./db/db.php";
$id=$_SESSION['id'];
$grade=$_GET['grade'];
$sql="select * from git where id LIKE '$grade%'";
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
        if($result['lng']==1){
            $lng="<img src='./img/html5.png' alt='html5css3'>";
        }else{
            $lng="없음";
        }

            ?>
        <ul class="p_page">
            <li class="pro">
                <p class="my">
                    <img src="./img/pro.png" width="100" alt="프로필"><br>
                    <span><?= $result['name'] ?></span>
                </p>
            </li>

                <li><span><a href="http://<?= $result['home'] ?>" target="_blank"><img src="./img/myhome.png" width='50' title="<?= $result['name'] ?>홈페이지"alt="<?= $result['name'] ?>홈페이지"></a></span><span ><a
                            href="<?= $result['git_url']?> " target="_blank"><img src="./img/github-logo.png" width="100" title="<?= $result['name'] ?>깃허브"alt="<?= $result['name'] ?>깃허브"></a></span>
                </li>
            <li class="lng">
                사용가능언어
                <ul>
                    <li><?=$lng?><span>Lv.<?=$result['level']?></span></li>
                </ul>
            </li>
                <li class="my_info"></li>
        </ul>
            <?php
        }
        ?>
    </div></div>
</body>

