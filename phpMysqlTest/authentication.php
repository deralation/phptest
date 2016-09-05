<?php
require_once 'login.php';

$connection = new mysqli($hn,$un,$pw,$db);

if($connection->connect_error)
  die($connection->connect_error);

if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
  $un_temp = mysqli_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
  $pw_temp = mysqli_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);

  $query = "SELECT * FROM users WHERE username='$un_temp'";

  $result = $connection->query($query);

  if(!$result->error){

    die($connection->error);

  }elseif ($result->num_rows) {

    $row = $result->fetch_array(MYSQLI_NUM);

    $result->close();

    $salt1 = "qm&h";
    $salt2 = "pg!@";

    $token = hash('ripemd128','$salt1$pw_temp$salt2');

    if($token == $row[3]) echo "$row[0] $row[1] : Hi $row[0], you are now logged in as '$row[2]'";
    else die("invalid username/password combination");
  }else die("invalid username/ password combination");

}else{
  header('www-Authenticate: Basic Realm="Restricted Section"');
  header('HTTP/1.0 401 Unauthorized');
  die('Please Enter your username and password');
}

$connection->close();

function mysqli_entities_fix_string($connection, $string){
  return htmlentities(mysqli_fix_string($connection,$string));
}

function mysqli_fix_string($connection, $string){
  if(get_magic_quotes_gpc())
    $string = stripcslashes($string);
  return $connection->real_escape_string($string);
}

?>
