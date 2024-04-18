<?php
session_start();
require "../includes/connect.php";
//https://12eb-41-81-142-80.ngrok-free.app/pesapal/callback.php
//?OrderTrackingId=1c298d87-ef37-4e7c-ab33-de3dfccce94d
//&OrderMerchantReference=92582762768768274
include 'acesstoken.php';
$OrderTrackingId = $_GET['OrderTrackingId'];
$OrderMerchantReference = $_GET['OrderMerchantReference'];
if(APP_ENVIROMENT == 'sandbox'){
  $getTransactionStatusUrl = "https://cybqa.pesapal.com/pesapalv3/api/Transactions/GetTransactionStatus?orderTrackingId=$OrderTrackingId";
}elseif(APP_ENVIROMENT == 'live'){
  $getTransactionStatusUrl = "https://pay.pesapal.com/v3/api/Transactions/GetTransactionStatus?orderTrackingId=$OrderTrackingId";
}else{
  echo "Invalid APP_ENVIROMENT";
  exit;
}
$headers = array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $token"
);
$ch = curl_init($getTransactionStatusUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$data = json_decode($response);
$bkid = $data->description;
$payment_method = $data->payment_method;
$currency = $data->currency;
$amount = $data->amount;
$tx_code = $data->confirmation_code;
$payer_account = $data->payment_account;
$date = $data->created_date;
$status = $data->status_code;

if($status != 1){
  $_SESSION['error'] = "There was a problem with your payment. Please try again!";
  echo "<script>window.location.href='https://kibokotoursandtravel.com/payment.php?id=$bkid'</script>";
}else{
  $txqry = "INSERT INTO transaction (booking_id, payment_method, currency, amount, tx_code, payer_account, pesapal_tracking_id, date_paid) VALUES ('$bkid', '$payment_method', '$currency', '$amount', '$tx_code', '$payer_account', '$OrderTrackingId', '$date')";

  $conn->query($txqry);

  $pkqry = "UPDATE package_booking SET booking_status='1', amount='$amount' WHERE booking_id='$bkid'";
  $conn->query($pkqry);



  $_SESSION['paysuccess'] = "Your payment was made successfully!";
  echo "<script>window.location.href='https://kibokotoursandtravel.com/payment-confirmation.php?id=$bkid'</script>";
}
?>