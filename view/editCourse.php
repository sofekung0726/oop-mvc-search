<?php 
  include_once("../model/ConDB.php");
  include_once("../model/Course.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Course</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/css.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>
<body>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand" href="http://sc.npru.ac.th/"><i class="fas fa-atom"></i> SC Short Courses</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://forms.gle/Gd6Yzdffsb83qpZw7" target="_blank">ยืนยันการชำระเงิน</a></li>
                        <li class="nav-item"><a class="nav-link" href="./course/addcourse.php" target="_blank">เพิ่มคอร์ส</a></li>
                    </ul>
                </div>
            </div>
        </nav>
                <!-- Header-->
                <header class="bg-or-5 py-1 bg-header-img">
            <div class="container-fluid px-4 px-lg-5 my-5">
                <div class="text-center orange-theme-4">
                    <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                    <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
                </div>
            </div>
        </header>
        <?php
          $cs_id = htmlspecialchars($_GET["cs_id"]);
          $obj_name = new Course();
          $rs2 = $obj_name->getCourseDetail($cs_id)
        ?>
        <div class="container">

<br>
<form name="frmadd"  method="post" action="../controller/editDB.php" enctype="multipart/form-data">
		
		<input name="cs_id" type="hidden" id="ID" value="<?php echo $rs2['cs_id'];?>">


  <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">คอร์ส</label>
      <div class="col-sm-10">
        <input type="text" name="cs_name" class="form-control" id="cs_name" value="<?php echo $rs2['cs_name'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">รูปภาพ</label>
      <div class="col-sm-10">
        <input type="text" name="cs_img" class="form-control" id="cs_img" value="<?php echo $rs2['cs_img'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">แผนการ</label>
      <div class="col-sm-10">
        <input type="text" name="cs_schedule" class="form-control" id="cs_schedule" value="<?php echo $rs2['cs_schedule'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ระยะเวลา</label>
      <div class="col-sm-10">
        <input type="text" name="cs_time" class="form-control" id="cs_time" value="<?php echo $rs2['cs_time'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">วันที่สมัคร</label>
      <div class="col-sm-10">
        <input type="text" name="cs_range_date" class="form-control" id="cs_range_date" value="<?php echo $rs2['cs_range_date'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">สถานที่</label>
      <div class="col-sm-10">
        <input type="text" name="cs_location" class="form-control" id="cs_location" value="<?php echo $rs2['cs_location'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">กลุ่มเป้าหมาย</label>
      <div class="col-sm-10">
        <input type="text" name="cs_group" class="form-control" id="cs_group" value="<?php echo $rs2['cs_group'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">รายละเอียด</label>
      <div class="col-sm-10">
        <input type="text" name="cs_detail" class="form-control" id="cs_detail" value="<?php echo $rs2['cs_detail'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">จุดมุ่งหมาย</label>
      <div class="col-sm-10">
        <input type="text" name="cs_fcourse" class="form-control" id="cs_fcourse" value="<?php echo $rs2['cs_fcourse'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">การประเมิน</label>
      <div class="col-sm-10">
        <input type="text" name="cs_perform" class="form-control" id="cs_perform" value="<?php echo $rs2['cs_perform'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">สิ่งที่จะได้รับ</label>
      <div class="col-sm-10">
        <input type="text" name="cs_reward" class="form-control" id="cs_reward" value="<?php echo $rs2['cs_reward'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ราคาคอร์ส</label>
      <div class="col-sm-10">
        <input type="text" name="cs_wallet" class="form-control" id="cs_wallet" value="<?php echo $rs2['cs_wallet'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">วันที่อบรม</label>
      <div class="col-sm-10">
        <input type="date" name="cs_date" class="form-control" id="cs_date" value="<?php echo $rs2['cs_date'];?>">
      </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">เบอร์ติดต่อ</label>
      <div class="col-sm-10">
        <input type="text" name="cs_phone" class="form-control" id="cs_phone" value="<?php echo $rs2['cs_phone'];?>">
      </div>
  </div>

  <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
    <button type="submit" class="btn btn-secondary btn-block"><i class="fa fa-pencil-square" aria-hidden="true"></i>แก้ไขข้อมูล</button>    
  </div>

</div>
	</form>
    </div>  

     <!-- Footer-->
     <footer class="py-5 bg-green mt-4">
            <div class="container-fluid">
              <p class="m-0 text-center text-dark">
                Copyright &copy; Faculty of Faculty of Science and Technology Nakhon Pathom Rajabhat University 2021 <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
              </p>

            </div>
        </footer>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</form>
</body>
</html>
