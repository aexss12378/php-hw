<?php
session_start();
if (($_SESSION['user_type'] !='student' && $_SESSION['user_type'] !='teacher')) {
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

學生網頁



<?php
header("Location=logout.php");
session_destroy();
?>
<a href="logout.php">登出</a>
</body>
</html>