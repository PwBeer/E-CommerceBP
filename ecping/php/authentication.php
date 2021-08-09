<?php
include "config.php";
//มีการสร้างตัวแปร จากข้อมูลที่ส่งมาจาก login.html
$e_mail =$_POST['e_mail'];
$pass = $_POST['pass'];
// ดึงข้อมูลจากฐานข้อมูลมาแสดง ถ้าหากข้อมูลที่ดึงมา ตรงกับ e_mail และ pass ให้ดำเนินการต่อ
$sql = "select * from members where e_mail = '$e_mail' and pass = '$pass'";
// ทำการ query ผลลัพธ์
$result = mysqli_query($con,$sql);
// กำหนดตัวแปร $row เพื่อทำการ fetch ออกมาเป็น array
$row = mysqli_fetch_array($result);
// มีการนับจำนวนแถว ถ้าหาก login เข้ามาแล้ว จำนวนแถวจะเป็น 1 แต่ถ้าหาก login ไม่สำเร็จ จำนวนแถวจะเป็น 0
$count = mysqli_num_rows($result);

// ถ้าหาก login ด้วยรหัส admin จะไปที่หน้า adminpage.php รหัส admin จะเก็บแค่ session pass อย่างเดียวเท่านั้น !!
if($e_mail == "admin@shwn.com" && $pass ="admin1150"){
     ##เมื่อล็อคอินแล้วจะมีการกำหนด SESSION
    $_SESSION['pass'] = $pass;
    echo "<script>alert('Welcome adminBeer');</script>";
    echo"<script>location.replace('adminpage.php');</script>";
}
// ถ้าหาก login ด้วยรหัส admin จะไปที่หน้า adminpage.php รหัส admin จะเก็บแค่ session pass อย่างเดียวเท่านั้น !!
elseif($e_mail == "adminping@shwn.com" && $pass ="admin1150"){ 
    $_SESSION['pass'] = $pass;
    echo "<script>alert('Welcome adminPing');</script>";
    echo"<script>location.replace('adminpage.php');</script>";
}
// ถ้าหาก login สำเร็จแล้ว $count จะมีค่าเท่ากับ 1 ส่วนนี้ไม่ใช่ admin จะเก็บแค่ session e_mail เท่านั้น แล้วไปที่หน้า index.php
elseif($count == 1){  
    $_SESSION['e_mail'] = $e_mail; 
    header("location: ../index.php");
}
// ถ้าหาก login ไม่ถูกต้อง etc.. ใส่รหัสผิด หรือใส่รหัสไม่ครบจะแจ้งว่า รหัสไม่ถูกต้อง แล้วกลับไปที่หน้า login.html
else{
    echo "<script>alert('login failed');</script>";
    echo "<script>alert('Please Check your Email or Password');</script>";
    echo"<script>location.replace('../pages/login.html');</script>";
}
?>