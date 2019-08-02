<?php
require_once("lib/PromptPayQR.php");
error_reporting(0);
$response = array();

if(isset($_GET['qr-code'])) {
	if(empty($_POST['percent']) || empty($_POST['money'])) {
        $response["status"] = 'error';
        $response["message"] = 'กรุณาอย่าเว้นช่องว่าง';
    }
	if (strlen($_POST['percent']) == 13 || strlen($_POST['percent']) == 10) {
		$PromptPayQR = new PromptPayQR(); // new object
		$PromptPayQR->size = 8; // Set QR code size to 8
		$PromptPayQR->id = $_POST['percent']; // PromptPay ID
		$PromptPayQR->amount = $_POST['money'].'.00'; // Set amount (not necessary)
		
		$response["status"] = "success";
		$response["base64za"] = $PromptPayQR->generate();
	}
    else {
		$response["status"] = 'error';
        $response["message"] = 'ท่านได้กรอกเบอร์หรือเลขบัตรประชาชนไม่ถูกต้อง';
	}
}

echo json_encode($response);

?>
