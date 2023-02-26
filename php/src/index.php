<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ตัวอย่าง โปรแกรมคำนวณหาค่าดัชนีมวลกาย(BMI)</title>
<style type="text/css">
body {
    background-color:#600;
    color:#FFF;
}

</style></head>

<body>
    <form action="calBMI.php" method="post">
        name
        <input type="text" name="name" placeholder="username" required>
        <br>
        weight
        <input type="int" name="weight" placeholder="กิโลกรัม" required>
        <br>
        height
        <input type="int" name="height" placeholder="เซนติเมตร" required>
        <br>
        Age
        <input type="int" name="Age" placeholder="ปี" required>
        <br>
        BloodType
        <input type="text" name="BloodType" placeholder="A,B,O,AB,a,b,o,ab" required>
        <br>
        <button type="submit">ประมวลผล</button>

</body>
</html>