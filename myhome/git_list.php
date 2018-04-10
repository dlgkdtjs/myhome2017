<!doctype html>
<html lang="ko">
<?php
include_once "./db/db.php";
session_start();
$sql="select * from git";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll();
$_SESSION['id']="hslee22";
include_once "./head.php";
?>
<body>
<div id="wrap">
    <?php
    include_once "./header.php"
    ?>
    <div id="container">
        <form id="git_form" action="" method="post">
        <table>
            <?php
                foreach ($rows as $result) {
                    ?>
                    <tr>
                        <td><input type="checkbox" value="<?=$result['idx']?>" name="idx"></td>
                        <td><?= $result['id'] ?></td>
                        <td><?= $result['name'] ?></td>
                        <td><a href="<?= $result['home'] ?>" target="_blank"><?= $result['home'] ?></a></td>
                        <td><a href="<?= $result['git_url'] ?>" target="_blank"><?= $result['git_url'] ?></a></td>
                        <td><button id="update" type="submit">수정</button></td>
                        <td><button id="del" type="submit">삭제</button></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        </form>
    </div>

</div>

</body>
<script>

        $("table").on("click","#update",function () {

            if($("input:checkbox[name='idx']").is(":checked")==false){
                alert("체크해주세요");
            }else{
                $("#git_form").attr("action","git_up.php");
            }

        })
        $("table").on("click","#del",function () {
            if($("input:checkbox[name='idx']").is(":checked")==false){
                alert("체크해주세요");
            }else{
                $("#git_form").attr("action","git_del.php");
            }

        });

</script>
</html>