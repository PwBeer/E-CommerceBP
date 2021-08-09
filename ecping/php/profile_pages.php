<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #D3ECDC;
            }
        </style>
</head>
<body>
    <div class="container" style="max-width: 600px; margin-top: 15%; background-color:white; ">
        <div class="row">
            <div class="col-12 text-center">
                <?php 
                $e_mail = $_SESSION['e_mail'];
                $sql = "select * from members where e_mail = '$e_mail'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result);           
                ?>
                <hr>
                <h2>Welcome : <?php echo $row['name'];?></h2>
                <hr>
                <h3>Image</h3>
                <h3>Your Email is : <?php echo $row['e_mail'];?></h3>

                <div class="col">
                <a class="btn btn-success" href="#" role="button" style="margin:2% 0px 5% 0px;">เปลี่ยนรหัสผ่าน</a>
                <a class="btn btn-danger" href="../index.php" role="button" style="margin:2% 0px 5% 0px;">กลับสู่หน้าหลัก</a>
                </div>
                

            </div>
        </div>
    </div>
</body>
</html>
