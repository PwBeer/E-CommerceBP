<!-- include config เพื่อติดต่อ database -->
<?php
include 'config.php';
// มีการตรวจสอบ session pass ถ้าหากมี session pass ให้ไปที่หน้า adminpage.php
if(isset($_SESSION['pass'])){
    header('adminpage.php');
}
// ถ้าไม่มี session pass ให้ตรวจสอบว่ามี session e_mail มั้ย
if(!isset($_SESSION['pass']))
{
    // ถ้ามี session e_mail ให้เปลี่ยนหน้าไปที่ index.php
    if(isset($_SESSION['e_mail']))
    {
        echo "<script>alert('You can't access the adminpage !');</script>";
        echo "<script>location.replace('../index.php');</script>";
    }
    // ถ้าไม่มี session e_mail ให้กลับไปที่หน้า login เพื่อทำการ login ก่อน
    else
    {
        header('location: ../pages/login.html');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>
