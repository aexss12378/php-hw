<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

    echo $_SESSION["login"];
    ?>

機密資訊



<?php
header("Location=logout.php");
session_destroy();
?>
<a href="logout.php">登出</a>
</body>
</html>




