<!DOCTYPE html>
<html lang="en">
<?php
    include("conn.php")
?>
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
        margin-top: 100px;
        margin-left:100px;
        margin-bottom: 100px;
        margin-right: 100px
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
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">สายพันธ์ุ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" name="breed">
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">อายุ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" name="Age">
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label">ปี</label>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">เพศ</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" name="gender">
    </div>
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    </div>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $breed=$_POST['breed'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

// ทำการเพิ่มข้อมูล
try {

    $sql = "INSERT INTO dog (name, breed, age ,gender)
    VALUES ('$name', '$breed', '$age','$gender')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<div class='alert alert-success'><strong> ยินดีด้วยค่ะ คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ! </strong></div>";
  } catch(PDOException $e) {
    echo $sql . "บันทึกข้อมูลผิดพลาด <br>" . $e->getMessage();
  }
  
  $conn = null;

   
}
?>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>