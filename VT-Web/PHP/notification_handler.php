<?php
//Contoh untuk menangani HTTP (POST) notifikasi yang dikirim Veritrans

$json_result = file_get_contents('php://input');
$result = json_decode($json_result, true);

error_log("Menerima notifikasi dari Veritrans: ");
error_log($json_result);

if($result->transaction_status == "capture")
{
	//success
	error_log("Status transaksi untuk order id ".$result->order_id.": ".$result->transaction_status);

	//TODO: Update lokal database merchant. Misal: update status order.
}
else if($result->transaction_status == "deny")
{
	//deny
	error_log("Status transaksi untuk order id ".$result->order_id.": ".$result->transaction_status);

	//TODO: Update lokal database merchant. Misal: update status order.
}
else if($result->transaction_status == "challenge")
{
	//challenge
	error_log("Status transaksi untuk order id ".$result->order_id.": ".$result->transaction_status);

	//TODO: Update lokal database merchant. Misal: update status order.
}
else
{
	//error
	error_log("Terjadi kesalahan pada data transaksi yang dikirim.<br />");
}

?>