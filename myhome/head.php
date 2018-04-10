<head>
    <meta charset="UTF-8">
    <title>hslee22 web class</title>
    <link rel="stylesheet" href="./css/guide.css?v2">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        $(document).ready(function(){
            $("#gnb>li").mouseenter(function(){
                $(this).find(".submenu").stop().slideDown();
            });
            $("#gnb>li").mouseleave(function(){
               $(this).find(".submenu").stop().slideUp();
            });
            $("#btn_login").click(function (event) {
                event.preventDefault();
                $("#login").css("display","block");
            })
            $("#close").click(function () {
                $("#login").css("display","none");
            })
        });
    </script>
</head>