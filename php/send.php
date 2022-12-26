<?php
require_once 'connect.php';

$nick=$_POST["nick"];
$tresc=$_POST["tresc"];
$connect=mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($connect,"utf8");

$input = "INSERT INTO wysryw (nick, wysryw) VALUES ('$nick','$tresc');";
  if ($nick==NULL OR $tresc==NUll){
  }
  else{
    $send=$connect->query($input);
  }  
  mysqli_close($connect);
  header('Location:../');
?>