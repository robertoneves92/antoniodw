<?php
  session_start();
  if(!isset($_SESSION['logado'])){
    header("Location:login.html");
  }

$result = shell_exec("ipconfig");
echo "<pre>$result</pre>";
?>