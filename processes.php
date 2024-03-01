<?php
    session_start();
	//require "includes/connect.php";
    require "includes/mailer.php";
	date_default_timezone_set("Africa/Nairobi");
    $date = date("m/d/Y g:iA");
    $ddate = date("Y_m_d_H_i_s");
    $snapshot_self_email = "ganiamtech@gmail.com";

	//Subscribe to Newsletter
if(isset($_POST['sub_newsletter'])){
    $em = mysqli_real_escape_string($conn, $_POST["sub_newsletter"]);
    $output = 1;
    
    $chkres = $conn->query("SELECT * FROM subscriber WHERE email = '$em'");
    if($chkres->num_rows > 0){
        $output = 0; //Already subscribed
    }else{
        $qry = "INSERT iNTO subscriber (email, date_subscribed) VALUES ('$em', '$date')";
        $res = $conn->query($qry);
    }

    echo json_encode($output);
}

//Contact Us form
if(isset($_POST['contactEnquiry'])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $em = mysqli_real_escape_string($conn, $_POST["contactEnquiry"]);
    $sub = mysqli_real_escape_string($conn, $_POST["sub"]);
    $sms = mysqli_real_escape_string($conn, $_POST["sms"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO enquiries (name, email, subject, message, date_created) VALUES ('$name', '$em', '$sub', '$sms', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $emsubject = "New Enquiry From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new enquiry from the website - Contact Us page <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$em." <br/>
        <b>Subject:</b> ".$sub." <br/>
        <b>Message:</b> ".$sms." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}


//Fetch destination
if(isset($_POST['fetch_single_dest'])){
    $id = mysqli_real_escape_string($conn, $_POST["fetch_single_dest"]);

    $qry = "SELECT * FROM destination WHERE destination_id = '$id'";
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

    echo json_encode($row);
}


//Specific Dest form
if(isset($_POST['book_specific_dest'])){
    $destid = mysqli_real_escape_string($conn, $_POST["book_specific_dest"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO bookings (name, phone, email, country, destination_id, date_of_travel, comment, people, date_created) VALUES ('$name', '$phone', '$email', '$country', '$destid', '$dateT', '$comment', '$people', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $dqry = "SELECT * FROM destination WHERE destination_id = '$destid'";
    $dres = $conn->query($dqry);
    $drow = $dres->fetch_assoc();
    $destname = $drow["days"] . " Days " . $drow["nights"] . " Nights " . $drow["location"];

    $emsubject = "New Booking From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Booking Request from the website - $destname Package <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Country of Residence:</b> ".$country." <br/>
        <b>Destination:</b> ".$destname." <br/>
        <b>No. of People:</b> ".$people." <br/>
        <b>Date of Travel:</b> ".$dateT." <br/>
        <b>Additional info:</b> ".$comment." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}

//Custom Dest form
if(isset($_POST['book_custom_dest'])){
    $dest = mysqli_real_escape_string($conn, $_POST["book_custom_dest"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $nights = mysqli_real_escape_string($conn, $_POST["nights"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO custom_bookings (name, phone, email, country, destination, date_of_travel, nights, comment, people, date_created) VALUES ('$name', '$phone', '$email', '$country', '$dest', '$dateT', '$nights', '$comment', '$people', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $emsubject = "New Booking From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Booking Request from the website - Custom Booking <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Country of Residence:</b> ".$country." <br/>
        <b>Destination:</b> ".$dest." <br/>
        <b>No. of People:</b> ".$people." <br/>
        <b>Date of Travel:</b> ".$dateT." <br/>
        <b>Additional info:</b> ".$comment." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}


//Flight Booking form
if(isset($_POST['book_flight'])){
    $from = mysqli_real_escape_string($conn, $_POST["book_flight"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $to = mysqli_real_escape_string($conn, $_POST["to"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO flight_bookings (name, phone, email, country, flight_from, date_of_travel, flight_to, comment, people, date_created) VALUES ('$name', '$phone', '$email', '$country', '$from', '$dateT', '$to', '$comment', '$people', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $emsubject = "New Flight Booking From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Flight Booking Request from the website - Flight Booking <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Country of Residence:</b> ".$country." <br/>
        <b>From:</b> ".$from." <br/>
        <b>To:</b> ".$to." <br/>
        <b>No. of People:</b> ".$people." <br/>
        <b>Date of Travel:</b> ".$dateT." <br/>
        <b>Additional info:</b> ".$comment." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}

//Transport Booking form
if(isset($_POST['book_transport'])){
    $vehicle = mysqli_real_escape_string($conn, $_POST["book_transport"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $days = mysqli_real_escape_string($conn, $_POST["days"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO transport_bookings (name, phone, email, country, vehicle, date_of_travel, days, comment, date_created) VALUES ('$name', '$phone', '$email', '$country', '$vehicle', '$dateT', '$days', '$comment', '$date')";
    $res = $conn->query($qry);
    
    echo $output;

    $emsubject = "New Transport Request From the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Transport Enquiry from the website - Transport <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Country of Residence:</b> ".$country." <br/>
        <b>Vehicle:</b> ".$vehicle." <br/>
        <b>No. of Days:</b> ".$days." <br/>
        <b>Date of Travel:</b> ".$dateT." <br/>
        <b>Additional info:</b> ".$comment." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}


//Coop Booking form
if(isset($_POST['book_coop'])){
    $event = mysqli_real_escape_string($conn, $_POST["book_coop"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $people = mysqli_real_escape_string($conn, $_POST["people"]);
    $dateT = mysqli_real_escape_string($conn, $_POST["dateT"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $output = 1;
    $_SESSION['thank_you_name'] = " ".$name;
    
    $qry = "INSERT iNTO corporate_bookings (name, phone, email, type, date_of_event, people, comment, date_created) VALUES ('$name', '$phone', '$email', '$event', '$dateT', '$people', '$comment', '$date')";
    $res = $conn->query($qry);
    
    echo $event;

    if($event == 1){
        $eventtype = "Team Building";
    }elseif($event == 2){
        $eventtype = "Corporate Training";
    }
    

    $emsubject = "New Corporate Enquiry from the Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Corporate Enquiry from the website - $eventtype <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Type:</b> ".$eventtype." <br/>
        <b>No. of People:</b> ".$people." <br/>
        <b>Date of Travel:</b> ".$dateT." <br/>
        <b>Additional info:</b> ".$comment." <br/>
        </p> 
    ";

    maillinge($snapshot_self_email, $emsubject, $embody);
}

if(isset($_POST['ganiamrequest'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $emsubject = "New Enquiry from the GaniamTech Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website (ganiamtech) <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}
if(isset($_POST['book-trip'])){
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $month = $_POST['month'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $emsubject = "New Enquiry from the Snapshot Tours Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$title." ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Month of Travel:</b> ".$month." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}  



if(isset($_POST['book-package'])){
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $month = $_POST['month'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $pkg = $_POST['package'];

    $emsubject = "New Enquiry from the Snapshot Tours Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$title." ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Phone:</b> ".$phone." <br/>
        <b>Month of Travel:</b> ".$month." <br/>
        <b>Package Chosen:</b> ".$pkg." <br/>
        <b>Additional info:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}


if(isset($_POST['contact-us-fm'])){
    //$title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$month = $_POST['month'];
    //$phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $emsubject = "New Enquiry from the Snapshot Tours Website";
    $embody = "
        <p>Hello,</p>
        <p>You have a new Enquiry from the website <br/> Here is the message:</p>
        <br/>
        <p>
        <b>Name:</b> ".$name." <br/>
        <b>Email:</b> ".$email." <br/>
        <b>Message:</b> ".$desc." <br/>
        </p> 
    ";
    $_SESSION['thankyou_name'] = $name;

    maillinge($snapshot_self_email, $emsubject, $embody);

    header('location: thank-you.php');
    exit();
}
?>