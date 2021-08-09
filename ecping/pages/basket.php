<!-- หน้านี้คือหน้าต่างแสดงสินค้าในตะกร้า -->
<?php
// มีการกำหนด session start เพื่อใช้ในการสร้าง session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("../picture/bg-for-basket.jpg");
        }
    </style>

</head>

<body>
        <div class="container" style=" margin-top: 5%; background-color: white; border-radius: 10px;">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="margin-top: 2%;">ตะกร้าสินค้า</h1>
                </div>
                <div class="col-lg-9">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ลำดับที่</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col">ราคารวม</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //ถ้าหากมี session cart หรือ มีสินค้าที่ user กดเข้ามาแล้วเพิ่มในตะกร้าสินค้า
                                if(isset($_SESSION['cart']))
                                {
                                    // จะทำการ foreach session cart เป็น key และ value
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        // มีการกำหนดลำดับของสินค้า โดย key จะเริ่มต้นที่ 0 โดยให้ 0+1 เป็น ลำดับที่ 1 
                                        $no = $key +1 ;
                                        ?>
                                        <tr>
                                        <!-- มีการสร้างตารางโดยมีการกำหนด ลำดับที่ และ กำหนดค่าต่างๆโดยเอาค่าของ session cart มาวนลูป -->
                                        <td><?php echo $no ?></td>
                                        <td><?php echo "$value[Item_Name]" ?></td>
                                        <td><input type = 'hidden' class = 'iprice' value = <?php  echo $value['Price']?> ><?php echo "$value[Price]" ?></td>
                                        <td><input class = 'text-center iquantity' onchange = 'total()' type='number' value = <?php echo $value['Quantity'] ?> min ='1' max = '20'></td>
                                        <td class='itotal'></td>
                                        
                                        <td>  
                                                    <!-- ในส่วนนี้คือ ปุ่มลบสินค้า ถ้าหากมีการกดปุ่ม จะส่งค่าไปที่ mamage_cart.php -->
                                        <form action= '../php/manage_cart.php' method='POST'>
                                            <input type = 'hidden' name = 'Item_Name' value = <?php echo "$value[Item_Name]" ?> >
                                            <button name = 'Remove_Item' class='btn btn-outline-danger btn-sm'>REMOVE</button>
                                        </form>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                }      
                            ?>                                             
                        </tbody>
                    </table>
                    <div class="col-12 text-center" style="margin-bottom: 2%;">
                         <form action = '../php/manage_cart.php' method='post'>  
                            <a class="btn btn-primary" href="../index.php" role="button">ซื้อสินค้าเพิ่มเติม</a>
                            <button class="btn btn-danger" href="basket.php" role="button" name = "Removeall">ลบสินค้าในตะกร้าทั้งหมด</button>
                        </form>                  
                    </div>

                </div>
                <div class="col-lg-3">
                    <!-- มีการใช้ javascript มาช่วยในเรื่องของการแสดงราคา และแสดงผลราคารวม -->
                    <div class="border bg-light rounded p-4 mb-3">
                        <h4 class="text-center">ราคาสินค้าทั้งหมด: </h4>
                        <h5 class="text-center" id='gtotal'></h5>
                        <br>
                        <form>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success btn-block ">ยืนยันการสั่งซื้อ</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- เชื่อมต่อไฟล์ app.js -->
<script src="app.js"></script>
</body>

</html>