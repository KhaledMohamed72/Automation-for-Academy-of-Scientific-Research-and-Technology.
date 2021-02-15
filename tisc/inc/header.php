<?php
session_start();
include_once("../connect.php");
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$reslut = mysqli_query($conn, "SELECT * FROM tisc_users WHERE username = '$username' and password = '$password'");
$num = mysqli_fetch_assoc($reslut);

if ($username != $num['username'] && $password != $num['password']) {
    header("location:../form.php");
}
?>
<!DOCTYPE html>
<html lang="ar" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>لوحة التحكم</title>

    <!-- Bootstrap -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/bootstrap-show-password.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <?php
  include('../connect.php');
  $query303 = mysqli_query($conn, "select image3 from report");
  $sel_image = mysqli_fetch_assoc($query303);
  ?>
  <div class="row">
      <div class="col-sm-12">
          <div class="text-center">
              <img style="max-height: 90px;width: 100%;" src="<?php echo $sel_image['image3']?>">
          </div>
      </div>
  </div>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="float: right;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-dashboard"> </i> الرئيسية</a>
    </div>
    <div class="pull-left">
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-comment" style="font-size:18px;"></span></a>
                <ul class="dropdown-menu"></ul>
          </li>
          &emsp;&emsp;&emsp;&emsp;
      </ul>

            <a class="navbar-brand" href="logout.php"><button  type="submit"  class="btn btn-danger"> تسجيل الخروج</button></a>
    </div>
    </div>
</nav>


      <section class="container-fluid" style="margin-top:20px;">
   
          <div class="row">