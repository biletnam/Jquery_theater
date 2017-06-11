<?php
@session_start();
require_once 'db.php';
$movie_name = ["0","飢餓遊戲：自由幻夢I","再見，在也不見","暮光之城：蝕","失控謊言","黑魔女","007：空降危機"];
//新增訂票人
function add_booker($booker_name,$booker_phone,$booker_email,$booker_session,$movie_id,$booker_seat){
    $sql= "INSERT INTO `booker` (`name`,`phonenumber`,`Email`,`session`,`seat`,`movieid`)
           VALUE('$booker_name','$booker_phone','$booker_email','$booker_session','$booker_seat','$movie_id')";
    $query = mysqli_query($_SESSION['link'],$sql);
    if($query)
    {
      if(mysqli_affected_rows($_SESSION['link']) == 1)
      {
        return true;
        //echo "訂票成功";
      }
      else {
        echo "訂票失敗" . mysqli_error($_SESSION['link']);
        //return false;
      }
    }
}

//搜尋訂票人
function get_search_booker($search_name,$search_phone){
  $sql = "SELECT * from `booker` WHERE `name`='{$search_name}' AND `phonenumber`='{$search_phone}'";
  $query = mysqli_query($_SESSION['link'],$sql);
  if($query)
  {
    while($row = mysqli_fetch_assoc($query))
    {
      $data[] =$row;
    }
  }
  return $data;
}

//座位狀態
function get_seatStatus($mid){
  $sql ="SELECT * FROM `booker` WHERE `movieid` = $mid";
  $query = mysqli_query($_SESSION['link'],$sql);
  $datas = array();
  if($query)
  {
    while($row = mysqli_fetch_assoc($query))
    {
      $datas[] = $row['seat'];
    }
  }
  else {
    echo "找尋失敗" . mysqli_error($_SESSION['link']);
  }
  return $datas;
}

  //檢查訂票人是否重複
  function check_booker_duplicate($bname){
    $sql = "SELECT * FROM `booker` WHERE `name` = '{$bname}'";
    $query = mysqli_query($_SESSION['link'], $sql);
    $result = null;
    if($query)
    {
      if(mysqli_num_rows($query)>=1){
        $result = true;
      }
    }
    else {
      echo "'{$sql}'語法請求失敗" . mysqli_error($_SESSION['link']);
    }
    return $result;
  }

  //取得所有電影
  function get_all_movie()
  {
    $sql = "SELECT * FROM `movielist` ";
    $query = mysqli_query($_SESSION['link'],$sql);
    $datas = array();
    if($query)
    {
      if(mysqli_num_rows($query)>0)
      {
        while($row = mysqli_fetch_assoc($query))
        {
          $datas[] = $row;
        }
      }
      return $datas;
    }
    else {
      echo "查詢錯誤" . mysqli_error($_SESSION['link']);
    }
  }

  //取得特定電影
  function get_the_movie($id)
  {
    $sql = "SELECT * FROM `movielist` WHERE `id`={$id}";
    $query = mysqli_query($_SESSION['link'],$sql);
    $datas = null;

    if(mysqli_num_rows($query) == 1)
    {
      $datas = mysqli_fetch_assoc($query);
    }
    else {
      echo mysqli_error($_SESSION['link']);
    }
    return $datas;
  }
?>
