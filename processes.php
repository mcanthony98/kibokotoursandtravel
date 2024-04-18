<?php 
session_start();
require "includes/connect.php";
include "includes/mailer.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("H_i_s");
$snapshot_self_email = "info@kibokotoursandtravel.com";


if(isset($_POST['sendsms'])){
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $child = mysqli_real_escape_string($conn, $_POST["children"]);
    $adult = mysqli_real_escape_string($conn, $_POST["adults"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);

    $qry = "INSERT INTO customer (firstname, lastname, email, country, phone, children, adults, description, date_created) VALUES ('$fname', '$lname', '$email', '$country', '$phone', '$child', '$adult', '$desc', '$date')";
    $conn->query($qry);

    $emsubject = "New Enquiry from the Website by ".$fname;
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website (Kibokotoursandtravel.com) <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$fname." ".$lname." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Country:</b> ".$country." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>No. of Travelers:</b><br/>
        <b>Adults:</b> ".$adult." <br/>
        <b>Children:</b> ".$child." <br/><br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;
    $_SESSION['access_ty'] = "thank you";

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}
elseif(isset($_POST['booking'])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $child = mysqli_real_escape_string($conn, $_POST["children"]);
    $adult = mysqli_real_escape_string($conn, $_POST["adults"]);
    $day = mysqli_real_escape_string($conn, $_POST["day"]);
    $month = mysqli_real_escape_string($conn, $_POST["month"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $packageid = mysqli_real_escape_string($conn, $_POST["packageid"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $dateoftravel = $year."-".$month."-".$day;

    $qry = "INSERT INTO package_booking (package_id, title, firstname, lastname, email, country, phone, date_of_travel, adults, children, date_created) VALUES ('$packageid', '$title', '$fname', '$lname', '$email', '$country', '$phone', '$dateoftravel' ,'$adult', '$child', '$date')";

    if($conn->query($qry) === TRUE){
        $_SESSION['success'] = "Your details were submitted successfully!";
        $id = $conn->insert_id;
        header('location: payment.php?id='.$id);
        exit();
    }else{
        $_SESSION['error'] = "An error occured. Please try again!";
        
        header('location: booking.php?id='.$packageid);
        exit();
    }


}

?>


