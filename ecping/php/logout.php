<!-- หน้านี้แสดงปุ่ม Log out -->
<?php
// มีการ include config.php เพื่อใช้งาน session
include 'config.php';
// เมื่อกดปุ่ม logout จากหน้า index.php หรือหน้าอื่นๆ จะทำการลบ session e_mail และ session pass ออก
unset($_SESSION['e_mail']);
unset($_SESSION['pass']);
// จากนั้นจะแจ้งเตือนว่า Log out เรียบร้อย
echo "<script>alert('You are already logged out of website !!');</script>";
// เมื่อ แสดงข้อความเสร็จแล้ว จะกลับไปที่หน้า index.php พร้อมกับปุ่มให้ login เข้ามาใหม่
echo "<script>location.replace('../index.php');</script>";
?>