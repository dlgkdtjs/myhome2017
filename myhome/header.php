<header>
    <div class="wrap">

        <h1 id="logo"><a href="./">서울디지텍고등학교</a></h1>
        <ul class="lnb">
            <?php
            if(isset($_SESSION['name'])) {
                ?>
                <li><a href="./logout.php" ">로그아웃 |</a></li>
                <li><a href=""><?=$_SESSION['name']?>님로그인 하였습니다.</a></li>
                <li><a href="./mypage.php">마이페이지</a></li>
                <?php
            }else {
                ?>
                <li><a href="./login.php"id="btn_login">로그인</a>|</li>
                <li><a href="./git.php">회원가입</a>|</li>
                <?php
            }
            ?>
        </ul>

    </div>
    <nav>
        <ul id="gnb">
            <li>
                <a href="./portpolio.php">포트폴리오</a>
            </li>
            <li><a href="./board1.php">자료실</a>
            </li>
            <li>
                참고사이트
                <ul class="submenu">
                    <li><a href="https://developers.google.com/speed/libraries/#jquery" target="_blank">JQUERY cdn</a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </li>
            <li>
                게시판
                <ul class="submenu">
                    <li>
                        <a href="./board.php">게시판</a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>
    <div class="mainbg">
        <img src="./img/web.jpg" alt="">
    </div>
</header>