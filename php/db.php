<?php
@session_start();
$host = 'localhost';
$dbuser = 'root';
$dbpw = '';
$dbname = 'finaltheater';

$_SESSION['link'] = mysqli_connect($host,$dbuser,$dbpw,$dbname);

if($_SESSION['link'])
{
  mysqli_query($_SESSION['link'],"SET NAMES utf8");
  //echo "successConnect";
}
else {
  echo "falseConnect" . mysqli_connect_error();
}
?>
