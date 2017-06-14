<?php
  require_once "php/db.php";
  require_once "php/functions.php";

  $themovie = get_the_movie($_GET['movie']);

  $viedo_path ="";
  if($_GET['movie']==1)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/xrIckmZdFyo' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==2)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/OQYEraG5BxQ' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==3)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/03ea0TFETK8' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==4)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/vaNd2Iy7B54' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==5)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/H6FoTn-fYDI' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==6)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/n_SapDJT2-I' frameborder='0' allowfullscreen></iframe>";
  }
  else if($_GET['movie']==7)
  {
    $viedo_path ="<iframe width='854' height='480' src='https://www.youtube.com/embed/ZEPJQzVSveE' frameborder='0' allowfullscreen></iframe>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>白雪大戲院</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu" rel="stylesheet"> <!--字型-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper toplist">
        <img src="images/favicon.png" class="logo" align="center">
        <a href="index.php" class="brand-logo">白雪大戲院</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="booking_search.php">訂位查詢</a></li>
          <li class="active"><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="videocontainer"> <!--影片-->
      <div class="videopos">
        <?php echo $viedo_path; ?>
      </div>
    </div>
    <div class="row imgbox"> <!--圖片-->
      <div class="col s3 offset-s4">
        <img class="movieImg" src="<?php echo $themovie['mimgpath']?>">
      </div>
    </div>
    <div class="row">
      <div class="col s5 offset-s5">
        <a href="booking.php?m=<?php echo $themovie['id']?>"class="waves-effect waves-light btn book-btn">前往訂票</a>
        <a href="javascript:void(0)"class="waves-effect waves-light btn previewbtn">觀看預告片</a>
      </div>
    </div>
    <div class="row"> <!--資訊-->
      <div class="col s10 offset-s1 content">
        <div class="col s4">
          <p>片名：<?php echo $themovie['mname']?></p>
          <p>上映時間：<?php echo $themovie['mpublish']?></p>
          <p>語言：<?php echo $themovie['mlanguage']?></p>
          <p>級數：<?php echo $themovie['mdegree']?></p>
          <p>演員：<?php echo $themovie['mactor'];?></p>
        </div>
        <div class="col s8">
          <h4>劇情簡介：</h4>
          <?php echo $themovie['mcontent'];?>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> <!--materialize javascript-->
  <script>
    $(".videocontainer").hide("fast");
    $(document).ready(function(){
      $(".previewbtn").click(function(){
        $(".videocontainer").fadeIn();
        $(".imgbox").fadeOut();
      });
    });
  </script>
</html>
