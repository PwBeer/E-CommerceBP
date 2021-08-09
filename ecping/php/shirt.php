<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt Catagories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/all.min.css">
</head>

<body>
    <div class="container" id="main">
        <div class="row">
            <form name="input" action="../php/search.php" method="post">
                <header>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand" id="navbarHome" href="../index.php">Shwn_shop</a>
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
                                    <a class="nav-link" aria-current="page" href="../index.php">สินค้าแนะนำ</a>
                                    <a class="nav-link" aria-current="page" href="shirt.php">หมวดเสื้อ</a>
                                    <a class="nav-link" aria-current="page" href="pant.php">หมวดกางเกง</a>
                                    <a class="nav-link" aria-current="page" href="skirt.php">หมวดกระโปรง</a>
                                    <a class="nav-link" aria-current="page" href="Acc.php">Accessory</a>
                                    <?php
                                        $count = 0;
                                        if(isset($_SESSION['cart']))
                                        {
                                            $count = count($_SESSION['cart']);
                                        }
                                    
                                    
                                    ?>
                                    <span><a class="btn btn-link btn-floating btn-lg text-danger m-1" href="../pages/basket.php"
                                            role="button" data-mdb-ripple-color="dark" style="margin-left: 40%;"><i
                                                class="fas fa-shopping-basket" style="margin-left: 5%; width:70px;"> (<?php echo $count ;?>)</i></a></span>
                                </div>
                                <?php
                                    if(!isset($_SESSION['e_mail'])){
                                        echo '<a class="btn btn-outline-danger" href="../pages/register.html" role="button" id="registerbut"
                                        style="margin-left: auto;">Register</a>';
                                        echo '<a class="btn btn-outline-primary" href="../pages/login.html" role="button"
                                        id="loginbut">Login</a>';
                                    }if(isset($_SESSION['e_mail'])){
                                        echo '<a class="btn btn-outline-danger" href="profile_pages.php" role="button" id="registerbut"
                                        style="margin-left: auto;">Your Profile</a>';
                                        echo '<a class="btn btn-outline-primary" href="logout.php" role="button"
                                        id="loginbut">logout</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </nav>
                </header>
            </form>
        </div>
        <h2 style="text-align: center; margin-top: 10px;">สินค้าหมวดเสื้อผ้า</h2>
        <div class="row">
          <?php
          $sql = "select * from shirt_product ORDER BY id ASC";
          $result = mysqli_query($con,$sql);
          if (mysqli_num_rows($result) > 0)
          {
            while ($row = mysqli_fetch_array($result))
            {
              ?>
              <div class="col-sm-3">
              <form method="POST" action="manage_cart.php?id=<?= $row['id']; ?>">
                <div class="card" style="width: 80%; margin: 10px 0px 10px 10%; text-align: center;" >
                    <img src= <?php echo $row['IMG'];?> class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['name'];?></h5>
                      <p>สินค้าราคา : <?php echo $row['price'];?> บาท</p>
                      <button class="btn btn-primary" name="Add_To_Cart"id="buyitem">สั่งซื้อสินค้า</button>
                      <input type ="hidden" name ="Item_Name" value = <?php echo $row['name'];?>>
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

        <hr>
        <footer class="text-center text-black" style="margin-bottom: 50px;">
            Contact us
            <a class="btn btn-link btn-floating btn-lg text-primary m-1" href="https://www.facebook.com/pingsuwatcharin"
                target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-link btn-floating btn-lg text-primary m-1" href="https://www.instagram.com/ping.shwn/"
                target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
            <p></p>
            Copyright © 2021 Shwn_shop
        </footer>
    </div>
</body>
</html>