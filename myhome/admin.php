<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-04-11
 * Time: 오전 9:45
 */
session_start();
include_once "./db/db.php";
$sql="select * from admin";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetchAll();
$sql1="select DISTINCT name from board group by name asc";
$stmt1=$pdo->prepare($sql1);
$stmt1->execute();
$row1=$stmt1->fetchAll();
?>
<body>
<form action="./admin_insert.php" method="post">
    <label for="homework">과제등록</label> <input type="text" id="homework" name="homework">

    <button type="submit">등록</button>
</form>
<h1>등록한 과제</h1>
<ul id="homework">
    <?php
    foreach ($row as $result) {
        ?>
        <li><?=$result['homework']?></li>
        <?php
    }
    ?>
</ul>
    <div id="">
        <h2>제출명단 <?=count($row1)?>명</h2>
        <ul>
            <?php
            foreach ($row1 as $result1) {
                ?>
                <li><?=$result1['name']?></li>
                <?php
            }
            ?>
        </ul>
        <h2>미제출명단</h2>
    </div>
<script>

</script>
</body>
