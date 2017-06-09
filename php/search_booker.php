<?php
  require_once 'db.php';
  require_once 'functions.php';
  //echo "successconnect";
  //print_r($_POST);
  $result = get_search_booker($_POST['search_name'],$_POST['search_phone']);
  echo json_encode($result,JSON_UNESCAPED_UNICODE);
  //print_r($result);
  //print_r()
?>
