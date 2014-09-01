<?php 
  session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['password']) == true))
  { 
    unset($_SESSION['login']); 
    unset($_SESSION['senha']); 
    header('location:login.html'); 
  } 
  $logado = $_SESSION['login'];
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
              <h3 class="masthead-brand">PING</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="about.html">About</a></li>
              </ul>
            </div>
          </div>
          
          <?php 
          $max_count = 10; //maximum count for ping command 
          $unix      =  1; //set this to 1 if you are on a *unix system       
          $windows   =  0; //set this to 1 if you are on a windows system 
         
          $register_globals = (bool) ini_get('register_gobals'); 
          $system = ini_get('system'); 
          $unix = (bool) $unix; 
          $win  = (bool)  $windows; 
          // 
          If ($register_globals) 
          { 
             $ip = getenv(REMOTE_ADDR); 
             $self = $PHP_SELF; 
          }  
          else  
          { 
             @$submit = $_GET['submit']; 
             @$count  = $_GET['count']; 
             @$host   = $_GET['host']; 
             $ip     = $_SERVER['REMOTE_ADDR']; 
             $self   = $_SERVER['PHP_SELF']; 
          }; 
          // form submitted ? 
          If ($submit == "Ping!")  
          { 
             // over count ? 
             If ($count > $max_count)  
             { 
                echo 'Maximum for count is: '.$max_count;
                echo '<br><a href="'.$self.'">Back</a>'; 
             } 
             else  
             { 
                // replace bad chars 
                $host= preg_replace ("/[^A-Za-z0-9.-]/","",$host); 
                $count= preg_replace ("/[^0-9.]/","",$count); 
                echo '<body align="center" bgcolor="#FFFFFF" text="#000000"></body>'; 
                echo("Resultados:<br>");  
                echo '<pre>';            
                //check target IP or domain 
                if ($unix)  
                { 
                   system ("ping -c$count -w$count $host"); 
                   system("killall ping");// kill all ping processes in case there are some stalled ones or use echo 'ping' to execute ping without shell 
                } 
                else 
                { 
                   system("ping -n $count $host"); 
                } 
                echo '</pre>'; 
              } 
          }  
          else  
          { 
              echo '<body bgcolor="#FFFFFF" text="#000000"></body>'; 
              echo '<p><font size="2">Seu IP é: '.$ip.'</font></p>'; 
              echo '<form methode="post" action="'.$self.'">'; 
              echo '   Digite um IP ou Host <input type="text" name="host" value="'.$ip.'"></input>'; 
              echo '   Quantidade de Pings <input type="text" name="count" size="2" value="4"></input>'; 
              echo '   <input type="submit" name="submit" value="Ping!"></input>'; 
              echo '</form>'; 
              echo '<br><b>'.$system.'</b>'; 
              echo '</body></html>'; 
          } 
          ?> 

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
