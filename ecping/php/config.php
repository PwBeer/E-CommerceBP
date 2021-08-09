<?php
// กำหนด session start เพื่อใช้งาน session จากนั้น กำหนด config เพื่อที่จะเข้าถึงฐานข้อมูล
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecping";

// ทำการ connect เข้าฐานข้อมูล
$con = mysqli_connect($host,$user,$password,$dbname);
// ถ้าหากเชื่อมต่อไม่สำเร็จจะให้แสดง error mysqli_connect_error
if(!$con){
    die("Connection failed : ".mysqli_connect_error());
}
// กำหนดให้ฐานข้อมูลใช้ภาษา utf8 ในการแสดงผล
mysqli_set_charset($con,'utf8');