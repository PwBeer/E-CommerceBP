<!-- หน้านี้คือเมื่อมีการสมัครสมาชิกเรียบร้อยแล้ว จะเข้ามาที่ confirm_regis.php เพื่อตรวจสอบว่าสมัครสมาชิกเสร็จเรียบร้อยหรือไม่ -->
<?php
// include config.php เพื่อเข้าใช้งาน database
include "config.php";
// สร้างตัวแปรเพื่อเก็บข้อมูลที่รับมาจาก register.html
$e_mail = $_POST['e_mail'];
$pass = $_POST['pass'];
$Name = $_POST['Name'];
// มีการสร้างเงื่อนไขต่างๆ ถ้า email และ pass ไม่ถูกกรอก สมัครไม่ผ่าน
if(empty($e_mail) && empty($pass))
{
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน !!!');</script>";
    echo "<script>location.replace('../pages/register.html');</script>";

}
// ถ้า email และ name ไม่ถูกกรอก สมัครไม่ผ่าน
elseif(empty($e_mail) && empty($name))
{
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน !!!');</script>";
    echo "<script>location.replace('../pages/register.html');</script>";

}
// ถ้า email  ไม่ถูกกรอก สมัครไม่ผ่าน
elseif(empty($e_mail))
{
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน !!!');</script>";
    echo "<script>location.replace('../index.php');</script>";

}
// ถ้า pass ไม่ถูกกรอก สมัครไม่ผ่าน
elseif(empty($pass))
{
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน !!!');</script>";
    echo "<script>location.replace('../index.php');</script>";

}
// ถ้า name ไม่ถูกกรอก สมัครไม่ผ่าน
elseif(empty($Name))
{
    echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน !!!');</script>";
    echo "<script>location.replace('../index.php');</script>";
}
// ถ้าหากกรอกข้อมูลเรียบร้อยแล้ว จะทำการ insert ข้อมูลเข้าไปที่ members แล้วจัดเก็บใน database
else
{
    $sql = "insert into members values ('$e_mail','$pass','$Name');";
    $result = mysqli_query($con,$sql);
    $message = "<script>alert('สมัครสมาชิกเรียบร้อยแล้ว !!! ');</script>";
    echo $message;
    mysqli_close($con);
    echo "<script>location.replace('../index.php');</script>";
}
?>