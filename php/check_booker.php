<?php
  require_once 'db.php';
  require_once 'functions.php';

  $result = check_booker_duplicate($_POST['name']);
  if($result)
  {
    echo "yes"; //duplicate
  }
  else {
    echo "no";
  }
  //echo $_POST['name'];
?>
