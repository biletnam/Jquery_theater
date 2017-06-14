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
          <li class="active"><a href="booking_search.php">訂位查詢</a></li>
          <li><a href="index.php">現正熱映</a></li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col s3 offset-s4">
        <form id="search_form" method="post">
          <div class="input-field col s12"> <!--姓名-->
            <i class="material-icons prefix">account_circle</i>
            <input name="search_booker_name" id="icon_prefix" type="text" class="validate" required>
            <label for="icon_prefix">Name</label>
          </div>
          <div class="input-field col s12"> <!--連絡電話-->
            <i class="material-icons prefix">phone</i>
            <input name="search_booker_phone" id="icon_telephone" type="tel" class="validate" required>
            <label for="icon_telephone">Telephone</label>
          </div>
          <div class="col s4 offset-s5">
            <a class="waves-effect waves-light btn" id="search_btn" href="javascript:void(0);">查詢</a>
          </div>
        </form>
      </div>
      <div class="col s5 offset-s3 content" id="booker_detail">
        <div class="col s5">
          <p id="movie_name"></p>
          <p id="booker_name"></p>
          <p id="booker_phone"></p>
          <p id="booker_email"></p>
          <p id="booker_session"></p>
          <p id="booker_date"></p>
          <p id="booker_seat"></p>
        </div>
        <div class="col s3 offset-s2">
          <img src="" id="movie_img">
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> <!--materialize javascript-->
  <script>
    $("#booker_detail").hide();
    $(document).ready(function(){
      var sessionA = "10：30",sessionB="13：00",sessionC="18：30",sessionD="23：30";
      var dateA = "2017/06/15",dateB="2017/07/20",dateC="2017/08/11";
      var searchdata = [];
      $("#search_btn").on("click", function(){
        $.ajax({
          type : 'POST',
          url : 'php/search_booker.php',
          data :{
            'search_name' : $("input[name=search_booker_name]").val(),
            'search_phone' : $("input[name=search_booker_phone]").val()
          },
          datatype: 'json'
        }).done(function(data){
          var img_src,mname,msession;
          var response=jQuery.parseJSON(data);
          //console.log(response[0]["name"]);
          $("#booker_detail").fadeIn();
          $("#booker_name").text("訂票人姓名：" + response[0]["name"]);
          $("#booker_phone").text("電話：" + response[0]["phonenumber"]);
          $("#booker_email").text("Email：" + response[0]["Email"]);
          $("#booker_seat").text("座次：" + response[0]["seat"]);

          //時間判斷
          if(response[0]['date']=='A'){
            $("#booker_date").text("時間：" + dateA);
          }else if (response[0]['date']=='B') {
            $("#booker_date").text("時間：" + dateB);
          }else if (response[0]['date']=='C'){
            $("#booker_date").text("時間：" + dateC);
          }


          //場次判斷
          if(response[0]['session']=='A'){
            $("#booker_session").text("場次：" + response[0]['session'] + "：" + sessionA);
          }else if (response[0]['session']=='B') {
            $("#booker_session").text("場次：" + response[0]['session'] + "：" + sessionB);
          }else if (response[0]['session']=='C'){
            $("#booker_session").text("場次：" + response[0]['session'] + "：" + sessionC);
          }else if (response[0]['session']=='D'){
            $("#booker_session").text("場次：" + response[0]['session'] + "：" + sessionD);
          }

          if(response[0]['movieid']==1)
          {
            img_src = "images/Alaycikus.jpg";
            mname = "飢餓遊戲：自由幻夢I";
          }
          else if(response[0]['movieid']==2){
            img_src = "images/distance.jpg";
            mname = "再見，在也不見";
          }
          else if(response[0]['movieid']==3){
            img_src = "images/eclipse.jpg";
            mname = "暮光之城：蝕";
          }
          else if(response[0]['movieid']==4){
            img_src = "images/lier.jpg";
            mname = "失控謊言";
          }
          else if(response[0]['movieid']==5){
            img_src = "images/Maleficent.jpg";
            mname = "黑魔女";
          }
          else if(response[0]['movieid']==6){
            img_src = "images/spy.jpg";
            mname = "007：空降危機";
          }
          $("#movie_img").attr("src" , img_src);
          $("#movie_img").attr("width", "300px");
          $("#movie_name").text("片名：" + mname);
          //window.location.href = "php/search_booker.php";
        }).fail(function(jqXHR,textStatus,errorThrown){
          console.log(jqXHR.responseText);
        });
        return false;
      });
    });
  </script>
</html>
