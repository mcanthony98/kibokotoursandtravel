<?php
session_start();
require "../includes/connect.php";
include 'RegisterIPN.php';

if(!isset($_GET['booking_id'])){
	header('location: ../index.php');
}

$bkid = $_GET['booking_id'];
$bkres = $conn->query("SELECT * FROM package_booking WHERE booking_id='$bkid'");
$bkrow = $bkres->fetch_assoc();

$pkgid = $bkrow['package_id'];
$pkgres = $conn->query("SELECT * FROM package WHERE package_id='$pkgid'");
$pkgrow = $pkgres->fetch_assoc();

$phone = $bkrow['phone'];
$first_name = $bkrow['firstname'];
$last_name = $bkrow['lastname'];
$email_address =  $bkrow['email'];

if($pkgrow['currency'] == '$'){
  $currency = 'USD';
}elseif($pkgrow['currency'] == 'KES'){
  $currency = 'KES';
}else{
  $currency = 'USD';
}

$cost = $pkgrow['price']*($bkrow['adults'] + (0.5*$bkrow['children']));
$amount = number_format($cost,2);

$_SESSION["pay_booking_id"] = $bkid;



$callbackurl = "https://kibokotoursandtravel.com/pesapal/response-page.php";

$merchantreference = rand(1, 1000000000000000000);


if(APP_ENVIROMENT == 'sandbox'){
  $submitOrderUrl = "https://cybqa.pesapal.com/pesapalv3/api/Transactions/SubmitOrderRequest";
}elseif(APP_ENVIROMENT == 'live'){
  $submitOrderUrl = "https://pay.pesapal.com/v3/api/Transactions/SubmitOrderRequest";
}else{
  echo "Invalid APP_ENVIROMENT";
  exit;
}
$headers = array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $token"
);

// Request payload
$data = array(
    "id" => "$merchantreference",
    "currency" => "$currency",
    "amount" => $amount,
    "description" => "$bkid",
    "callback_url" => "$callbackurl",
    "notification_id" => "$ipn_id",
    "branch" => "",
    "billing_address" => array(
        "email_address" => "$email_address",
        "phone_number" => "$phone",
        "country_code" => "KE",
        "first_name" => "$first_name",
        "middle_name" => "",
        "last_name" => "$last_name",
        "line_1" => "Pesapal Limited",
        "line_2" => "",
        "city" => "",
        "state" => "",
        "postal_code" => "",
        "zip_code" => ""
    )
);
$ch = curl_init($submitOrderUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$data = json_decode($response);
$redirect_url = $data->redirect_url;
echo "<script>window.location.href='$redirect_url'</script>";