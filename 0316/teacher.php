<?php
session_start();
if (($_SESSION['user_type'] !='teacher' && $_SESSION['user_type'] !='president')) {
    header('Location: index.php');
    exit;
}
header("Location=logout.php");
session_destroy();
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

    echo $_SESSION["login"];
    ?>

老師網頁</br>
<a href="student.php">想看學生網頁嗎</a>



<a href="logout.php">登出</a>
</body>
</html>