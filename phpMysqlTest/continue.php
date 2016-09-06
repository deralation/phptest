<?php

session_start();

if(isset($_SESSION['username']))
{
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $forname = $_SESSION['forname'];
  $surname = $_SESSION['surname'];

  destroy_session_and_data();

  echo 'Welcome back $forname.<br> Your full name is $forname $surname.<br> Your username is "$username" and your password is "$password".';
}else echo "Please <a href='authenticate2.php'>click here</a> to log in.";

function destroy_session_and_data(){
  session_start();
  $_SESSION = array();
  setcookie(session_name(),"", time() - 2592000, '/');
  session_destroy();
}



?>
