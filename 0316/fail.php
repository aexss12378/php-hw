<?php ob_start(); ?>
<?php 
session_start();

if ($_SESSION["login"]=="Yes"){

}else{
    //header("Location:error.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    </head>
<body>
    登入失敗! <br>
    網頁將在三秒跳轉至登入頁面 <br>
    <a href="index.php">點選這裡</a>

    <?php
    header("Refresh:3;url=index.php")
    ?>
</body>
</html>
<?php ob_flush(); ?>