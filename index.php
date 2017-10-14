<?php

session_start();
if( !isset($_SESSION["user"]) || $_SESSION["user"] == false){
  include('tela-login.php');
}else{
$user = $_SESSION["user"];
include ('dashboard.php');
}

?>
