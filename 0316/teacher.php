<?php
session_start();
if (($_SESSION['user_type'] !='teacher' && $_SESSION['user_type'] !='president')) {
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
    $mysite = $_SESSION['user_type'];
    print("Value of mysite has been retrieved: ".$mysite."\n");
    echo $_SESSION["login"];
    ?>

老師網頁</br>
<a href="student.php">想看學生網頁嗎</a>
<?php
header("Location=logout.php");
?>


<a href="logout.php">登出</a>
</body>
</html>