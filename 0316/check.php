<?php
session_start();

$myID="derrick";
$myPWD="1234";

$teacherID="homosex";
$teacherPWD="123456";

$PresidentID="lskforever";
$PresidentPWD="00000000";

$studentID="kkk";
$studentPWD="ppp";


$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($myID==$id)&&($myPWD==$pwd)){
    $_SESSION["login"]="Yes";
    $location = "ok.php";
} else if(($teacherID==$id)&&($teacherPWD==$pwd)){
    $_SESSION["login"]="老師登入成功 </br>";
    $_SESSION['user_type'] = 'teacher';
    $location = "teacher.php";
} else if(($PresidentID==$id)&&($PresidentPWD==$pwd)){
    $_SESSION["login"]="校長登入成功 </br>";
    $_SESSION['user_type'] = 'president';
    $location = "president.php";
} else if(($studentID==$id)&&($studentPWD==$pwd)){
    $_SESSION["login"]="學生登入成功 </br>";
    $_SESSION['user_type'] = 'student';
    $location = "student.php";
} else {
    $_SESSION["login"]="登入失敗，請檢查帳號密碼 </br>";
    $location = "fail.php";
}

header("Location: " . $location);




?>