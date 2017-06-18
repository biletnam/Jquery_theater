<?php
    require_once "php/db.php";
    require_once "php/functions.php";

    $allmovielist = get_all_movie();
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
        <a href="#!" class="brand-logo">白雪大戲院</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="booking_search.php">訂位查詢</a></li>
          <li class="active"><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <?php if(!empty($allmovielist)): ?>
        <?php foreach ($allmovielist as $datas): ?>
      <div class="col s12 m6 l4">
        <div class="card horizontal small">
          <div class="card-image">
            <img src="<?php echo $datas['mimgpath']?>">
          </div>
          <div class="card-stacked small">
            <div class="card-content">
              <p><?php echo $datas['mname'] ?></p>
              <p>片長：<?php echo $datas['mlength']?></p>
              <p>導演：<?php echo $datas['mdirector']?></p>
              <p>演員：<?php echo $datas['mactor']?></p>
            </div>
            <div class="card-action">
              <a href="MovieDetail.php?movie=<?php echo $datas['id']?>">詳細資料</a>
            </div>
          </div>
        </div>
      </div>
        <?php endforeach; ?>
      <?php endif;?>
    </div>

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> <!--materialize javascript-->
  <script>
    $(document).ready(function(){

    });
  </script>
</html>
