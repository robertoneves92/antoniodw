<?php 
  session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['password']) == true))
  { 
    unset($_SESSION['login']); 
    unset($_SESSION['senha']); 
    header('location:login.html'); 
  } 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Projeto DWEB</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">NETSTAT</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="about.html">About</a></li>
              </ul>
            </div>
          </div>
          
          <?php
          $result = shell_exec("netstat");
          ?>

          <textarea  id="rede" cols="90" rows="20" readonly>
          <?php 
          echo "$result"?>
          </textarea>

         <div class="mastfoot">
            <div class="inner">
              <p>IFPB - Instituto Federal de Educação, Ciências e Tecnologia da Pabaíba</p>
            </div>
          </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
