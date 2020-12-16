<!-- วิธีการสั่งซื้อสินค้าออนไลน์ -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: whitesmoke;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>วิธีการสั่งซื้อสินค้าออนไลน์</title>
    <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <h1 class="Head_title">วิธีการสั่งซื้อสินค้าออนไลน์</h1>
    <hr class="style1">

    <div class="container">
    <div class="buying_step">
        <div class="step1"><br>
            <h1 class="step_head"><b>ขั้นตอนที่ 1</b></h1>
            <br>
            <h2>ที่เมนูด้านซ้ายมือ สินค้าจะแบ่งตามหมวดหมู่ มีให้เลือกอย่างหลากหลาย" </h2>
            <br>
            <img src="<?php echo base_url('img/buying_step1.jpg'); ?>">
            <br><br><br><br>         
        </div>

        <div class="step2"><br>
            <h1 class="step_head"><b>ขั้นตอนที่ 2</b></h1>
            <br>
            <h2>เมื่อพบสินค้าที่ตัดสินใจจะซื้อแล้ว ให้กดที่ปุ่ม "เพิ่มใส่รถเข็น" </h2>
            <br>
            <img src="<?php echo base_url('img/buying_step2.jpg'); ?>">
            <br><br><br><br>         
        </div>

        <div class="step3">
            <h1 class="step_head"><b>ขั้นตอนที่ 3</b></h1>
            <h2>หลังจากนั้นจะพบหน้าแสดงรายละเอียดการเลือกสินค้า หากตัดสินใจเลือกสินค้านี้ ก็สามารถกดที่ปุ่ม "ยืนยันการเลือกสินค้า" 
                <br>แต่ถ้าต้องการดูสินค้าอื่นแทน ก็สามารถกด "กลับหน้าแรก" เพื่อกลับไปเลือกสินค้าต่อได้เลย
            </h2>
            <br>
            <img src="<?php echo base_url('img/buying_step3.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step3">
            <h1 class="step_head"><b>ขั้นตอนที่ 4</b></h1>
            <br>
            <h2>หลังจากยืนยันการเลือกสินค้า จะพบหน้าการยืนยันสินค้าเข้ารถเข็น สามารถกดที่ปุ่ม "เพิ่มเข้ารถเข็น"
                แล้วสินค้าจะเข้าไปอยู่ในรถเข็น <br>แต่ถ้ายังต้องการดูสินค้าอื่นแทน ก็สามารถกด "กลับหน้าแรก" เพื่อกลับไปเลือกสินค้าต่อได้เหมือนเดิม
            </h2>
            <br>
            <img src="<?php echo base_url('img/buying_step4.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step5">
            <h1 class="step_head"><b>ขั้นตอนที่ 5</b></h1>
            <br>
            <h2>จากนั้นสินค้าที่เลือกก็จะมาอยู่ที่หน้ารถเข็นสินค้า หากจะทำการสั่งซื้อ ก็สามารถกดที่ปุ่ม "ดำเนินการสั่งซื้อ"
                <br>โดยรายการสินค้าที่เลือก พร้อมราคาจะอยู่ที่ขวามือของจอ
                <br>หากต้องการเลือกสินค้าต่อ ก็สามารถกดที่ปุ่ม "เลือกสินค้าต่อ" ซึ่งจะพากลับไปที่หน้าหลัก
            </h2>
            <br>
            <img src="<?php echo base_url('img/buying_step5_1.jpg'); ?>">
            <br><br><br><br>

            <h2>สามารถเข้าดูรถเข็นได้ ด้วยการกดที่ไอคอนรถเข็นที่มุมบนของจอ</h2>
            <br>
            <img src="<?php echo base_url('img/buying_step5_2.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step6">
            <h1 class="step_head"><b>ขั้นตอนที่ 6</b></h1>
            <br>
            <h2>กรอกที่อยู่ทางไปรษณีย์ที่ต้องการให้ทางจัดส่งสินค้าไปให้ แล้วก็กดปุ่ม "ดำเนินการต่อ"</h2>
            <br>
            <img src="<?php echo base_url('img/buying_step6.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step7">
            <h1 class="step_head"><b>ขั้นตอนที่ 7</b></h1>
            <br>
            <h2>เลือกบริษัทผู้จัดส่งที่ต้องการ ระหว่าง Kerry กับ DHL แล้วก็กดปุ่ม "ดำเนินการต่อ"</h2>
            <br>
            <img src="<?php echo base_url('img/buying_step7.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step8">
            <h1 class="step_head"><b>ขั้นตอนที่ 8</b></h1>
            <br>
            <h2>เลือกวิธีการชำระเงินระหว่าง ชำระเงินปลายทาง หรือผ่านบัญชีธนาคาร โดยจะมีรายละเอียดติดต่อและจัดส่งปรากฎอยู่ด้านล่าง</h2>
            <br>
            <img src="<?php echo base_url('img/buying_step8.jpg'); ?>">
            <br><br><br><br>
        </div>

        

    </div>
    </div>



</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100hv;
        align-items: center;
        align-content: center;
        font-family: 'Prompt', sans-serif;
    }

    img {
        max-width: 85%;
        height: auto;
        box-shadow: 10px 10px 5px #0D2137;
        -moz-box-shadow: 10px 10px 5px #0D2137;
        -webkit-box-shadow: 10px 10px 5px #0D2137;
        -khtml-box-shadow: 10px 10px 5px #0D2137;
    }
    
    .buying_step {
        background-color: #E0EAF5;
    }
</style>