    <!-- หน้าเลือกขนส่ง -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transport Comstore</title>
    </head>

    <style>
        .no input {
            height: 100px;
            width: 1000px;
        }
    </style>

    <body>
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <br>
                    <br>
                    <h4 style="text-align:center;"> เลือกขนส่ง</h4>
                    <br>
                    <form action="<?php echo site_url('cart/addtran'); ?>" method="post">


                        <div class="form-group row">
                            <div class="col-sm-12 control-label"></div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_tran"  value="kerry">
                                kerry
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_tran" value="dhl">
                                dhl
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 control-label"></div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">ชำระเงิน</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h4 style="text-align:center;"> รายละเอียด</h4>

               <?php foreach ($query2 as $rs) {

                    echo '<b>';
                    echo 'ชื่อ.....';
                    echo $rs->m_name;
                    echo '</b>';
                    echo '<br>';
                    echo '<b>';
                    echo 'อีเมล.....';
                    echo $rs->m_email;
                    echo '</b>';
                    echo '<br>';
                    echo '<b>';
                    echo 'เบอร์โทร.....';
                    echo $rs->m_tel;
                    echo '</b>';
                    
                } ?>

           </div>
       </div>
   </div>

   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h4 style="text-align:center;"> </h4>

               <?php foreach ($query3 as $r3) {

                    echo '<b>';
                    echo 'ที่อยู่.....';
                    echo $r3->p_address;
                    echo '</b>';
                  
                    
                } ?>

           </div>
       </div>
   </div>

    </html>