<?php
session_start();
if (($_SESSION['user_type'] !=='president')) {
    header('Location: index.php');
    exit;
}


?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

    echo $_SESSION["login"];
    ?>

校長網頁</br>
<a href="teacher.php">想看老師網頁嗎</a>


<?php
header("Location=logout.php");

?>
<a href="logout.php">登出</a>
</body>
</html>