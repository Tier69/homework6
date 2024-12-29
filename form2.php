<!DOCTYPE html>
<html lang="en">

<?php
    include("conn.php")
?>

<head>
    <!-- เพิ่ม bootstap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เเทรก font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Krub", serif;
            font-weight: 200;
            font-style: normal;
            margin-top: 250;
            margin-left: 250;
            margin-bottom: 250;
            margin-right: 250;

        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม bootstrap เเละ เขียนโปรเเกรมกับเงื่อนไข</title>
</head>

<body>
h1>โปรแกรมเก็บข้อมูลสุนัข</h1>
    <form class="row g-3">
  <div class="col-md-2">
    <label for="inputEmail4" class="form-label">รหัสประจำตัวสุนัข</label>
    <input type="text" class="form-control" id="inputEmail4" name="id">
  </div>
  <div class="col-md-2">
    <label for="inputPassword4" class="form-label">ชื่อของสุนัข</label>
    <input type="text" class="form-control" id="inputPassword4" name="name">
  </div>
  <div class="col-2">
    <label for="inputAddress" class="form-label">สายพันธุ์ของสุนัข</label>
    <input type="text" class="form-control" id="inputAddress" name="breed">
  </div>
  <div class="col-1">
    <label for="inputAddress2" class="form-label"> เพศของสุนัข</label>
    <input type="text" class="form-control" id="inputAddress2" name="gender">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">วันเดือนปีเกิดของสุนัข</label>
    <input type="text" class="form-control" id="inputCity" name="date">
  </div>
  <div class="col-md-1">
    <label for="inputState" class="form-label">สีขนของสุนัข</label>
    <input type="text" class="form-control" id="inputState" name="color">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label"> หมายเลขไมโครชิพ (หากมี) </label>
    <input type="text" class="form-control" id="inputZip" name="micro">
  </div>
  <div class="col-md-5">
    <label for="name" class="form-label"> ชื่อของเจ้าของสุนัข</label>
    <input type="text" class="form-control" id="neme" name="oneme">
  </div>
  <div class="col-md-5">
    <label for="tel" class="form-label"> เบอร์โทรศัพท์ติดต่อของเจ้าของ</label>
    <input type="text" class="form-control" id="tel" name="tel">
  </div>
  <div class="col-md-12">
    <label for="p" class="form-label"> ข้อมูลเกี่ยวกับประวัติสุขภาพของสุนัข (เช่น โรคประจำตัว, วัคซีน, การผ่าตัด)</label>
    <input type="text" class="form-control" id="p" name="about">
  </div>


  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $breed=$_POST['breed'];
    $gender=$_POST['gender'];
    $color=$_POST['color'];
    $date=$_POST['date'];
    $micro=$_POST['micro'];
    $oneme=$_POST['oneme'];
    $tel=$_POST['tel'];
    $about=$_POST['about'];

   try {
 
  $sql = "INSERT INTO dog1 (id, name, breed, gender, date, color, micro, oneme, tel, about)
  VALUES ('$id', '$name', '$breed', '$gender','$date' '$color,'$micro','$oneme','$tel','$about')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo " <div class='alert alert-success'> <strong>บันทึกสำเร็จ!</strong> ยินดีด้วยนะจ๊ะ คุณได้บันทึกข้อมูลเข้าไปใหม่ </div>";
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