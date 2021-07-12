<?php
include "config.php";
$e_mail =$_POST['e_mail'];
$pass = $_POST['pass'];
$sql = "select * from members where e_mail = '$e_mail' and pass = '$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    $_SESSION['e_mail'] = $e_mail; ##เมื่อล็อคอินแล้วจะมีการกำหนด SESSION
    echo "<script>alert('login Successfully');</script>";   
    header("location: ../index.php");
}
else{
    echo "<script>alert('login failed');</script>";
    echo "<script>alert('Please Check your Email or Password');</script>";
   echo"<script>location.replace('../pages/login.html');</script>";
}
?>