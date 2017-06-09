<?php
  require_once 'php/db.php';
  require_once 'php/functions.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>白雪大戲院</title>
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
          <li class="active"><a href="booking_search.php">訂位查詢</a></li>
          <li><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col s12 title">
        <h1 class="center">訂票明細</h1>
      </div>
      <div class="col s10 offset-s1 content">
        <div class="col s6">
          <p>訂票人姓名：</p>
          <p>連絡電話：</p>
          <p>Email：</p>
          <p>電影場次：</p>
          <p>座位：</p>
        </div>
        <div class="col s6">
          <p>圖片</p>
          <p>片名：</p>
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
