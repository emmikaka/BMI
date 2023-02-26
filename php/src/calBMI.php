<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</title>
</head>

<body>
<div align="center">
  <?php
  include 'tabledataexample.php';

  //ประกาศตัวแปรรับค่าจาก form
      $name = $_POST['name'];
      $weight = $_POST['weight'];
      $height = $_POST['height'];
      $Age = $_POST['Age'];
      $BloodType = $_POST['BloodType'];
  
  //insert onto table
      $sql = "INSERT INTO BMI
      (
      name,
      weight,
      height,
      Age,
      BloodType
      )
      VALUES
      (
      '$name',
      '$weight',
      '$height',
      '$Age',
      '$BloodType'
      )    
      ";
         $result = mysqli_query($conn, $sql) or die("Connection failed: " . 
         $conn->connect_error);

         

  $height=$height/100;
 
  $bmi=$weight/($height*$height);
 
 
  if($bmi<=18.50){
       $c="น้ำหนักน้อย / ผอม";
       $s="มากกว่าคนปกติ";
  }else if($bmi>18.50 && $bmi<22.90){
       $c="ปกติ (สุขภาพดี)";   
       $s="เท่าคนปกติ";
  }else if($bmi>23 && $bmi<24.90){
       $c="ท้วม / โรคอ้วนระดับ 1";   
       $s="อันตรายระดับ 1";
  }else if($bmi>25 && $bmi<29.90){
       $c="อ้วน / โรคอ้วนระดับ 2";   
       $s="อันตรายระดับ 2";
  }else if($bmi>30){
       $c="อ้วนมาก / โรคอ้วนระดับ 3";
       $s="อันตรายระดับ 3";   
  }

  //ถ้ามีการใช้ดาต้า>>เพิ่มเสร็จแล้ว ก็ปิดซะ
  mysqli_close($conn);
   ?>
   <h2>โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</h2>
   
   <p align="center">
   <b>BMI : </b><?php echo $bmi;?> bmi<br /><br />
   <b>อยู่ในเกณท์ : </b><?php echo $c;?><br /><br />
   <b>ภาวะเสี่ยงต่อโรค : </b><?php echo $s;?>
   
   </p>   

</div>
</body>
</html>