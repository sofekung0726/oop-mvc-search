<?php
  include_once "../model/ConDB.php";
  include_once "../model/Course.php";

  //สร้างตัวแปร
  $cs_id = $_POST['cs_id'];
  $cs_name = $_POST['cs_name'];
  $cs_img = $_POST['cs_img'];
  $cs_date = $_POST['cs_date'];
  $cs_wallet = $_POST['cs_wallet'];
  $cs_range_date = $_POST['cs_range_date'];
  $cs_fcourse = $_POST['cs_fcourse'];
  $cs_time = $_POST['cs_time'];
  $cs_location = $_POST['cs_location'];
  $cs_group = $_POST['cs_group'];
  $cs_detail = $_POST['cs_detail'];
  $cs_perform = $_POST['cs_perform'];
  $cs_reward = $_POST['cs_reward'];
  $cs_schedule = $_POST['cs_schedule'];
  $cs_phone = $_POST['cs_phone'];

  //เรียกใช้
  $obj_name=new Course();
  $rs2=$obj_name->editCourse($cs_id, 
    $cs_name,$cs_img,$cs_date,$cs_wallet,$cs_range_date,$cs_fcourse,$cs_time,
    $cs_location,$cs_group,$cs_detail,$cs_perform,$cs_reward,$cs_schedule,$cs_phone);
    header("location: ../index.php");
    exit(0);

?>