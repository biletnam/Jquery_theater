<?php
  require_once 'php/db.php';
  require_once 'php/functions.php';
  $themovie = get_the_movie($_GET['m']);
  $result = get_seatStatus($_GET['m']);
  $r_length = count($result);
  //echo $r_length;
  //print_r($result);
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
  <body class="book">
    <nav>
      <div class="nav-wrapper toplist">
        <img src="images/favicon.png" class="logo" align="center">
        <a href="index.php" class="brand-logo">白雪大戲院</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="booking_search.php">訂位查詢</a></li>
          <li><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col s12 title">
        <h1 class="center">白雪大戲院線上訂位</h1>
      </div>
      <div class="col s7 bookseat">
        <table>
          <tbody>
            <tr> <!--first-->
              <td></td>
              <td></td>
              <td></td>
              <td class="seat 1">1</td>
              <td class="seat 2">2</td>
              <td class="seat 3">3</td>
              <td class="seat 4">4</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr> <!--second-->
              <td></td>
              <td class="seat 5">5</td>
              <td class="seat 6">6</td>
              <td class="seat 7">7</td>
              <td class="seat 8">8</td>
              <td class="seat 9">9</td>
              <td class="seat 10">10</td>
              <td class="seat 11">11</td>
              <td class="seat 12">12</td>
              <td></td>
            </tr>
            <tr> <!--third-->
              <td></td>
              <td class="seat 13">13</td>
              <td class="seat 14">14</td>
              <td class="seat 15">15</td>
              <td class="seat 16">16</td>
              <td class="seat 17">17</td>
              <td class="seat 18">18</td>
              <td class="seat 19">19</td>
              <td class="seat 20">20</td>
              <td></td>
            </tr>
            <tr> <!--four-->
              <td class="seat 21">21</td>
              <td class="seat 22">22</td>
              <td class="seat 23">23</td>
              <td class="seat 24">24</td>
              <td class="seat 25">25</td>
              <td class="seat 26">26</td>
              <td class="seat 27">27</td>
              <td class="seat 28">28</td>
              <td class="seat 29">29</td>
              <td class="seat 30">30</td>
            </tr>
            <tr> <!--fiveth-->
              <td class="seat 31">31</td>
              <td class="seat 32">32</td>
              <td class="seat 33">33</td>
              <td class="seat 34">34</td>
              <td class="seat 35">35</td>
              <td class="seat 36">36</td>
              <td class="seat 37">37</td>
              <td class="seat 38">38</td>
              <td class="seat 39">39</td>
              <td class="seat 40">40</td>
            </tr>
            <tr> <!--sixth-->
              <td class="seat 41">41</td>
              <td class="seat 42">42</td>
              <td class="seat 43">43</td>
              <td class="seat 44">44</td>
              <td></td>
              <td></td>
              <td class="seat 45">45</td>
              <td class="seat 46">46</td>
              <td class="seat 47">47</td>
              <td class="seat 48">48</td>
            </tr>
          </tbody>
        </table>
        <p><img src="images/colorBlock_R.png" class="color_block" width="20px">  已售出</p>
        <p><img src="images/colorBlock_B.png" class="color_block" width="20px">  你選擇的座位</p>
        <p><img src="images/colorBlock_G.png" class="color_block" width="20px">  可選座位</p>
      </div>
      <div class="col s5 information">
        <h4>線上訂位</h4>
        <h5><?php echo $themovie['mname']?></h5>
        <form id="book_form" method="post">
          <div class="input-field col s6"> <!--時間-->
            <select name="selector_date">
              <option value="" disabled selected>Select Date</option>
              <option value="A">2017/06/15</option>
              <option value="B">2017/07/20</option>
              <option value="C">2017/08/11</option>
            </select>
            <label>Movie Date</label>
          </div>
          <div class="input-field col s6"> <!--時段-->
            <select name="selector_session">
              <option value="" disabled selected>Select Session</option>
              <option value="A">A：10：30</option>
              <option value="B">B：13：10</option>
              <option value="C">C：18：30</option>
              <option value="D">D：23：30</option>
            </select>
            <label>Movie Session</label>
          </div>
          <div class="input-field col s6"> <!--姓名-->
            <i class="material-icons prefix">account_circle</i>
            <input name="booker_name" id="icon_prefix" type="text" class="validate" required>
            <label for="icon_prefix">Name</label>
          </div>
          <div class="input-field col s6"> <!--連絡電話-->
            <i class="material-icons prefix">phone</i>
            <input name="booker_phone" id="icon_telephone" type="tel" class="validate" required>
            <label for="icon_telephone">Telephone</label>
          </div>
          <div class="input-field col s12"> <!--Email-->
            <i class="material-icons prefix">email</i>
            <input name="booker_email" id="email" type="email" class="validate" required>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
          <div class="col s3">
            <p id="nowbooksum">目前訂票人數：0/0</p>
          </div>
          <div class="col s2">
            <button class="btn waves-effect waves-light" type="submit" name="action">確認
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> <!--materialize javascript-->
  <script>
    $(document).ready(function(){
      $('select').material_select();
      var length = <?php echo $r_length ?>;
      var arr = ["<?php echo join("\", \"", $result); ?>"];
          //$("  ").attr("class","hadbooked");
      for(var i=0;i<length;i++)
      {
        $("." + arr[i]).attr("class","booked");
        $(".booked").css("background-color","rgb(236, 80, 70)");
        //console.log(arr[i]);
      }
      var booked_submit=0;//送出訂位資料數
      var num=0,seat=[]; //選擇座位數
      seat.length=49;
      //座位選擇
      $(".seat").on("click",function(){
        //console.log($(this).text());
        //console.log(seat);
        console.log($("input[name=booker_name]").val());
        var nowchoseseat = $(this).text();
        console.log("now" + nowchoseseat);
        if(num<4)
        {
          if(seat[nowchoseseat]) //值為true表示按過
          {
            $(this).css("background-color","rgb(57, 231, 105)");
            seat[nowchoseseat]=false;
            num--;
          }
          else {
            $(this).css("background-color","rgb(30, 77, 221)");
            seat[nowchoseseat]=true;
            num++;
          }
          console.log("num" + num);
        }
        else if(num==4){
          if(seat[nowchoseseat]) //值為true表示按過
          {
            $(this).css("background-color","rgb(57, 231, 105)");
            seat[nowchoseseat]=false;
            num--;
          }
          else {
            alert("以選擇超過四個座位");
          }
        }
        $("#nowbooksum").text("目前訂票人數：" + booked_submit + "/" + num);
      });

      //檢查訂票人姓名
      $("input[name=booker_name]").on("keyup",function(){
        if($(this).val()!="")
        {
          $.ajax({
            type : "POST",
            url : "php/check_booker.php",
            data : {
              name : $(this).val()
            },
            dataType : "html"
          }).done(function(data){
            console.log(data);
            if(data == "yes")
            {
              alert("訂票人姓名已重複");
            }
          }).fail(function(jqXHR,textStatus,errorThrown){

          });
        }
      });
      //表單送出
      $("#book_form").on("submit",function(){

          if(num!=0)
          {
            $.ajax({
              type : "POST",
              url : "php/add_booker.php",
              data :{
                'bname' : $("input[name=booker_name]").val(),
                'bphone' : $("input[name=booker_phone]").val(),
                'bemail' : $("input[name=booker_email]").val(),
                'bsession' : $("select[name=selector_session]").val(),
                'bdate' : $("select[name=selector_date]").val(),
                'bseat' : seat,
                'bnow' : booked_submit,
                'mid' : <?php echo $_GET['m'] ?>
              },
              dataType : 'html'
            }).done(function(data){
              console.log(data);
              if(data=="yes")
              {
                alert("購票成功")
                if(booked_submit==num-1)
                {
                  window.location.href="index.php";
                }
                else {
                  booked_submit++;

                  $("input[name=booker_name]").val("");
                  $("input[name=booker_phone]").val("");
                  $("input[name=booker_email]").val("");
                    $("#nowbooksum").text("目前訂票人數：" + booked_submit + "/" + num);
                }
                console.log("bbb" + booked_submit);
              }
              else {
                alert("購票失敗");
              }
            }).fail(function(jqXHR,textStatus,errorThrown){
              alert("有錯誤產生");
              console.log(jqXHR.responseText);
            });
            return false;
          }
          else {
            alert("請選擇座位");
          }
      });
    });
  </script>
</html>
