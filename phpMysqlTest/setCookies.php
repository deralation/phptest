<?php
setcookie('username','Hannah',time()+60*60*24*7,'/');

if(isset($_COOKIE['username']))
  $username = $_COOKIE['username'];

var_dump($_COOKIE); exit();

?>
