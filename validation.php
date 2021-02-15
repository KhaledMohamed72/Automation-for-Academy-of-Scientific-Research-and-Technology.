<?php

session_start();
include_once("connect.php");
$username =stripslashes(mysqli_real_escape_string($conn,$_POST['user']));
$password =$_POST['password'];
$reslut1 = mysqli_query($conn,"SELECT * FROM gico_users WHERE username = '$username' and password = '$password'");
$reslut2 = mysqli_query($conn,"SELECT * FROM main_users WHERE username = '$username' and password = '$password'");
$reslut3 = mysqli_query($conn,"SELECT * FROM sub_main_users WHERE username = '$username' and password = '$password'");
$reslut4 = mysqli_query($conn,"SELECT * FROM tisc_users WHERE username = '$username' and password = '$password'");
$reslut5 = mysqli_query($conn,"SELECT * FROM tto_users WHERE username = '$username' and password = '$password'");
$num1 =mysqli_num_rows($reslut1);
$num2 =mysqli_num_rows($reslut2);
$num3 =mysqli_num_rows($reslut3);
$num4 =mysqli_num_rows($reslut4);
$num5 =mysqli_num_rows($reslut5);

if($num1 == 1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo '<meta http-equiv="refresh" content="0;\'gico/index.php\'"/>';
}

if($num2 == 1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo '<meta http-equiv="refresh" content="0;\'main/index.php\'"/>';
}

if($num3 == 1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo '<meta http-equiv="refresh" content="0;\'sub-main/index.php\'"/>';
}

if($num4 == 1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo '<meta http-equiv="refresh" content="0;\'tisc/index.php\'"/>';
}

if($num5 == 1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
echo '<meta http-equiv="refresh" content="0;\'tto/index.php\'"/>';
}

elseif(empty($username) || empty($password)){
header("location:form.php?error=invalid username or password");
}
?>