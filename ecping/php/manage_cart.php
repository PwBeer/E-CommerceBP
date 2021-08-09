<!-- หน้านี้คือหน้าที่ทำการตรวจสอบสินค้า ก่อนที่จะส่งลง basket.php -->
<?php
// มีการกำหนด session_start เพื่อใช้สร้าง session
session_start();
// ตรวจสอบเงื่อนไข้ถ้าหากมี method post ก็จะให้ทำตามเงื่อนไข
if($_SERVER["REQUEST_METHOD"] =="POST")
{
    // กรณีที่ 1 มีการกดปุ่มเพิ่มสินค้าเข้าตะกร้า
    if(isset($_POST['Add_To_Cart']))
    {
        // ถ้าหากมี session cart อยู่แล้ว 
        if(isset($_SESSION['cart']))
        {
            // ทำการสร้างตัวแปร array column จากนั้นเก็บ item name จาก session cart
            $myitems = array_column($_SESSION['cart'],'Item_Name');
            // ทำการตรวจสอบว่า สิ่งที่ user กดเข้ามาใส่ในตะกร้า มีอยู่ใน array ของ $myitems หรือไม่ ถ้าหากมี ให้ alert ว่า "สินค้านี้มีในตะกร้าอยู่แล้ว"
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>
                alert('สินค้านี้มีอยู่ในตะกร้าแล้ว !!!');
                window.location.href='../index.php';
                </script>";
            }
            // ถ้าหากไม่มีสินค้าในตะกร้า ให้ทำการนับ session ทั้งหมด จากนั้นให้นำสินค้านั้นมาสร้างเป็น array เช่น สินค้าชิ้นที่ 2 คือ $_SESSION['cart'][2]
            // สินค้าชิ้นที่ 3 คือ $_SESSION['cart'][3] จากนั้นทำการ alert ว่าเพิ่มสินค้าเรียบร้อย
            // ปล.จัดเก็บสินค้าในรูปแบบ array โดยใน array ประกอบด้วย Item_Name , Price , Quantity
            
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>
                alert('เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว');
                window.location.href='../index.php';
                </script>";
            }
        }
        // ถ้าหากไม่มี Session cart ให้ทำการสร้าง session cart ขึ้นมา โดยเป็น index ที่ 0 
        // โดย array จะเก็บค่า Item_Name , Price , Quantity
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>
                alert('เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว');
                window.location.href='../index.php';
                </script>";
    
        }
    }
    // กรณีที่ 2 user กดปุ่มลบสินค้า
    if(isset($_POST['Remove_Item']))
    {
        // ทำการ foreach session cart โดยกำหนดเป็น key กับ value
        foreach($_SESSION['cart'] as $key => $value)
        {
            // มีการตรวจสอบว่า item ที่ user กดเข้ามานั้น ชื่อ Item_Name ตรงกับ value ของ Session cart ที่มีในตะกร้า
            if($value['Item_Name'] == $_POST['Item_Name'])
            {
                // จะทำการ ลบ session cart ออก โดยอ้างอิงถึง key เช่น สินค้าที่ 1 ชื่อว่า เสื้อ 1 ถ้าหากกดเข้ามาเป็น เสื้อ 1 จะทำการลบสินค้าที่ 1 เป็นตัว
                // ปล. สินค้าที่ 1 คือ $key และ เสื้อ 1 คือ value
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                // จากนั้นเมื่อลบสินค้าเสร็จแล้วจะกลับไปที่หน้า basket.php
                echo "<script>
                alert('Item Removed');
                location.replace('../pages/basket.php');
                </script>";
            }
        }
    }
    // ถ้าหาก user กดปุ่ม ล้างสินค้าในตะกร้าทั้งหมด
    if(isset($_POST['Removeall']))
    {
        // จะทำการลบ session cart ออกทั้งหมด และไม่มีสินค้าในตะกร้าเหลืออยู่
        unset($_SESSION['cart']);
        // จากนั้นจะกลับไปที่หน้า basket.php
        echo "<script>
        alert('All Item has been Removed');
        location.replace('../pages/basket.php');
        </script>";
    }
}