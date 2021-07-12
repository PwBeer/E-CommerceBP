<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('You are already logged out of website !!');</script>";
echo "<script>location.replace('../index.php');</script>";
?>