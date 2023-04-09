<?php

  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $cs_id = htmlspecialchars($_GET["cs_id"]);
  $obj_name = new Course();
  $rs2 = $obj_name->delCourse($cs_id);
  header("location: ../index.php");
  exit(0);
  ?>
