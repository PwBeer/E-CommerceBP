<?php
include "config.php";
$e_mail = $_POST['e_mail'];
$pass = $_POST['pass'];
$Name = $_POST['Name'];
$sql = "insert into members values ('$e_mail','$pass','$Name');";
$result = mysqli_query($con,$sql);
if($result){
    $message = "<script>alert('สมัครสมาชิกเรียบร้อยแล้ว !!! ');</script>";
    echo $message;
    mysqli_close($con);
    echo "<script>location.replace('../index.php');</script>";
}
else{
    echo "<script>alert('การสมัครสมาชิกไม่สำเร็จ !!!');</script>";
}
?>