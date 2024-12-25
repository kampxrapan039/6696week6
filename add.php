<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่ม bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- แทรก fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <style>
        body{
        font-family: "Itim", serif;
         font-weight: 400;
        font-style: normal;
        margin-top: 250;
        margin-left:250;
        margin-bottom: 250;
        margin-right: 250;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม bootstrap และ เขียนโปรแกรมกับเงื่อนไข</title>
</head>
<body>
    <h1>โปรแกรมคำนวณ และเงื่อนไข</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail3" name="score1">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อเล่น</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" name="score2">
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">อายุ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" name="score3">
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label">ปี</label>
    </div>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1=$_POST['score1'];
    $s2=$_POST['score2'];
    $sum=$s1+$s2;
    echo "<br><br> <h3>คุณได้คะแนนรวมเท่ากับ " .$sum." </h3> <br><br> " ;

    if ($sum < "50") {
      echo "<h1>ยินดีด้วยคุณสอบผ่าน</h1><br>";
    } else {
      echo "<h1>เสียใจด้วยคุณสอบตก</h1><br>";
    }
    echo "<div class='alert alert-success'><strong>คำนวณเสร็จแล้ว!</strong> ผลคะแนนที่ได้</div>";
}
?>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>