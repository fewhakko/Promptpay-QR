<html lang="en">
   <head>
      <title>PromptPay - QRCode</title>
	  <link rel="shortcut icon" href="favicon.ico">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">

      <style>
         @import url('https://fonts.googleapis.com/css?family=Kanit');
         body {
         font-family: 'Kanit', sans-serif;
         }
      </style>
   </head>
   <body>
   
   
  
  
     <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
      <div class="container">

  <a class="navbar-brand" href="#">
    <img src="favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
    PromptPay
	
	
  </a>
  
  <div>
</nav>

      <div class="container">
         <br>
         <div class="card text-dark bg-light mb-3" style="margin-top : 30px;">
            <div class="card-header">สร้าง QR Code สำหรับรับเงินเข้าบัญชีของคุณ</div>
            <div class="card-body">
               <div class="panel panel-info">
                  <div class="panel-body">
                     <form class="form-horizontal">
                        <div class="alert alert-dismissible alert-warning">
                           <h4 class="alert-heading">คำอธิบาย</h4>
                           <p class="mb-0"> </b>
                              เป็นครั้งแรกที่เราสามารถรับเงินจากเพื่อนหรือลูกค้า โดยไม่เสียค่าธรรมเนียมการโอน และไม่ต้องบอกข้อมูลบัญชีให้ยุ่งยาก
                           </p>
                        </div>
                        <br>
                        <div class="row">
						
						<div class="col-lg-4 offset-lg-1">
                              <div class="form-group">
                                 <label class="control-label">เบอร์โทรศัพท์ / เลขประจำตัวประชาชน</label>
                                 <div class="form-group">
                                    <div class="input-group mb-3">
                                       <input type="text" id="percent" class="form-control" placeholder="06xxxxxxxx">
                          
                                    </div>
                                 </div>
                              </div>
                           </div>
						
                           <div class="col-lg-4 offset-lg-2">
                              <div class="form-group">
                                 <label class="control-label">จำนวนเงิน</label>
                                 <div class="form-group">
                                    <div class="input-group mb-3">
                 
                                       <input type="text" id="money" class="form-control" placeholder="10000">
                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                        <hr>

                        <button onclick="javascript:pexxrcent();" type="button" class="btn btn-success">สร้าง QR Code เพื่อโอนเงิน</button>
						
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
	  
	  
	  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">เสร็จ</h4>
		                   	<td><input class="form-control-plaintext hidden" style="color:white;" id="moneyzassza" readonly=""></td>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        </div>
					
<div class="modal-body" style="margin: auto;">
          <img src="https://promptpay.github.io/img/PromptPay-logo.jpg" alt="พร้อมเพย์" style="max-width: 250px;margin-bottom: 10px;">
		  <br>
		  <img alt="qrcode" id="qrcode" style="max-width: 250px;margin-bottom: 10px;">
          <div id="amount-show" style="text-align: center;"></div>
          <div id="info-show" style="text-align: center; font-size: 70%; margin-top: 10px; color: #A6A6A6;">
            สามารถสนับสนุนผู้สร้างได้ที่เบอร์ 0638428816
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close-button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  
      <h6>
         <center>COPYRIGHT © 2019 ALL SYSTEM BY FEWEIEI</center>
      </h6>
	 


	         <script src="asset/js/func.js"></script>
        <script src="asset/js/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <script src="asset/js/sweetalert.min.js"></script>
   </body>
</html>
