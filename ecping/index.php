<?php
# มีการนำไฟล์ config.php เข้ามาใช้ ไฟล์ config.php คือกำหนดการเชื่อมต่อ database
include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shwn_shop</title>
    <!-- เชื่อม CDN Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- เชื่อม style.css และ font awesome -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <!-- สร้าง form bootstraps -->
    <div class="container" id="main">
        <div class="row">
            <form name="input" action="php/search.php" method="POST">
                <!-- สร้าง ในส่วนของ Header -->
                <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand" id="navbarHome" href="index.php">Shwn_shop</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <input type="text" placeholder="ค้นหาสินค้าที่นี่" class="form-control"
                                        id="inputsearch">
                                    <button class="btn btn-outline-danger" type="submit"
                                        style="margin: 10px 0px 0px 3px; height: 40px;"><i
                                            class="fas fa-search"></i></button>
                                    <a class="nav-link" aria-current="page" href="index.php">สินค้าแนะนำ</a>
                                    <a class="nav-link" aria-current="page" href="php/shirt.php">หมวดเสื้อ</a>
                                    <a class="nav-link" aria-current="page" href="php/pant.php">หมวดกางเกง</a>
                                    <a class="nav-link" aria-current="page" href="php/skirt.php">หมวดกระโปรง</a>
                                    <a class="nav-link" aria-current="page" href="php/Acc.php">Accessory</a>
                                    
                                    <!-- ตรวจสอบว่ามี session cart หรือไม่ ถ้ามีให้ทำการนับ session cart เพื่อที่จะเอาไปแสดงจำนวนของที่ถูกเลือกในตะกร้าสินค้า -->
                                    <?php
                                        $count = 0;
                                        if(isset($_SESSION['cart']))
                                        {
                                            $count = count($_SESSION['cart']);
                                        }
                                    
                                    
                                    ?>
                                    <span><a class="btn btn-link btn-floating btn-lg text-danger m-1" href="pages/basket.php"
                                            role="button" data-mdb-ripple-color="dark" style="margin-left: 40%;"><i
                                                class="fas fa-shopping-basket" style="margin-left: 5%; width:70px;"> (<?php echo $count ;?>)</i></a></span>
                                </div>
                                                               
                                <!-- ตรวจสอบว่ามี session e_mail จาก authentication.php ถ้ามีจะไม่มีจะมีปุ่ม register กับ login
                                        แต่ถ้ามี session e_mail จะมีปุ่ม Your profile กับ logout-->
                                <?php
                                    if(!isset($_SESSION['e_mail'])){
                                        echo '<a class="btn btn-outline-danger" href="pages/register.html" role="button" id="registerbut"
                                        style="margin-left: auto;">Register</a>';
                                        echo '<a class="btn btn-outline-primary" href="pages/login.html" role="button"
                                        id="loginbut">Login</a>';
                                    }if(isset($_SESSION['e_mail'])){
                                        echo '<a class="btn btn-outline-danger" href="php/profile_pages.php" role="button" id="registerbut"
                                        style="margin-left: auto;">Your Profile</a>';
                                        echo '<a class="btn btn-outline-primary" href="php/logout.php" role="button"
                                        id="loginbut">logout</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </nav>
                </header>
            </form>
        </div>
        
        
        <!-- สร้าง form bootstraps -->
        <div class="row">
            <h2 style="text-align: center; margin-top: 10px;">สินค้าแนะนำ</h2>
            <div class="col">
                <div>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" id="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="picture/p5.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="picture/p6.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="picture/p7.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <!-- สร้าง form bootstraps -->
            <div class="row">
                 <!-- ในปุ่ม สั่งซื้อสินค้า จะมีการตรวจสอบถ้าหากมีการกด name = cart จะ alert ว่า สินค้าถูกเพิ่มแล้ว แล้วจะลิ้งไปที่ url index.php?success  -->
                <!-- ใช้คำสั่ง sql ทำให้แปลงข้อมูลจาก sql มาเป็น array จากนั้น ใช้ array ในการเข้าถึง รูปภาพ ชื่อ และ ราคา -->
                <?php
                $sql = "select * from rec_product";
                $result = mysqli_query($con,$sql);
                if (mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <div class="col-sm-4">
                        <form method="POST" action="php/manage_cart.php?id=<?=$row['id']; ?>">  
                            <div class="card" style="width: 80%; margin: 0px 0px 10px 13%; text-align: center;">
                                <img src= <?php echo $row['IMG'] ;?>  class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row['name'] ;?>
                                    </h5>
                                    <p>สินค้าราคา : <?php echo $row['price'];?> บาท</p>
                                    <p class="card-text"></p>
                                    <button type = "submit" class="btn btn-primary" name="Add_To_Cart"id="buyitem">สั่งซื้อสินค้า</button>
                                    <input type ="hidden" name ="Item_Name" value = <?php echo $row['name'];?> >
                                    <input type = "hidden" name = "Price" value = <?php echo $row['price'];?> >
                                </div>
                            </div>
                        </form>
                </div>
                <?php
                    }
                    
                }         
                ?>
            </div>

            <!-- สร้าง footer -->
            <footer class="text-center text-black" style="margin-bottom: 50px;">
                Contact us
                <a class="btn btn-link btn-floating btn-lg text-primary m-1"
                    href="https://www.facebook.com/pingsuwatcharin" target="_blank" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-primary m-1" href="https://www.instagram.com/ping.shwn/"
                    target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                <p></p>
                Copyright © 2021 Shwn_shop
            </footer>
    </div>
</body>

</html>