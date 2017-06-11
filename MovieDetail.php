<?php
  require_once "php/db.php";
  require_once "php/functions.php";

  $themovie = get_the_movie($_GET['movie']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>白雪大戲院</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">白雪大戲院</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="booking_search.php">訂位查詢</a></li>
          <li class="active"><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="row"> <!--圖片-->
      <div class="col s3 offset-s4">
        <img class="movieImg" src="<?php echo $themovie['mimgpath']?>">
      </div>
    </div>
    <div class="book-btn">
      <a href="booking.php?m=<?php echo $themovie['id']?>"class="waves-effect waves-light btn">前往訂票</a>
    </div>
    <div class="row"> <!--資訊-->
      <div class="col s10 offset-s1 content">
        <div class="col s4">
          <p>片名：<?php echo $themovie['mname']?></p>
          <p>上映時間：<?php echo $themovie['mpublish']?></p>
          <p>語言：<?php echo $themovie['mlanguage']?></p>
          <p>級數：<?php echo $themovie['mdegree']?></p>
          <p>演員：<?php echo $themovie['mactor'];?></p>
          <p></p>
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
    $(document).ready(function(){

    });
  </script>
</html>
