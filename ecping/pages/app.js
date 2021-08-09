// มีการกำหนดค่าราคารวมหรือ gt = 0
var gt = 0;
// สร้างตัวแปร gtotal,iprice,iquantity,itotal โดย gtotal getbyid และ นอกนั้น getbyclassname
var gtotal = document.getElementById('gtotal');
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
// สร้างฟังก์ชั่น total เพื่อใช้ในการคำนวณราคารวมทั้งหมด
function total()
{
    // กำหนด local var เป็น gt =0
    gt = 0;
    // ใช้ for loop ในการวนค่าราคารวมของแต่ละสินค้า
    for (i=0;i<iprice.length;i++)
    {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt = gt + (iprice[i].value) * (iquantity[i].value);
                
    }
    gtotal.innerText = gt + " บาท";
}
total();