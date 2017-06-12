<?php
  require_once 'db.php';
  require_once 'functions.php';
  //echo $_POST['bname'];
  $result=0;
  $n=0;
  for($i=1;$i<50;$i++)
  {
    if(isset($_POST['bseat'][$i]) && $_POST['bseat'][$i]==true)
    {
      if($n==$_POST['bnow'])
      {
        $result = add_booker($_POST['bname'],
                            $_POST['bphone'],
                            $_POST['bemail'],
                            $_POST['bsession'],
                            $_POST['bdate'],
                            $_POST['mid'],
                            $i);
        break;
      }
      else {
        $n++;
      }
    }
  }

  if($result)
  {
    echo "yes";
  }
  else {
    echo "no";
  }
?>
