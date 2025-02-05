<?php 
session_start();
require "../../includes/connect.php";
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i:s");
$filedate = date("H_i_s");	


// Add new category
if(isset($_POST["add-category"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $slag = str_replace(' ', '-', $cat);
    $cat = ucwords($cat);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $cat_insert = "INSERT INTO category(category_name, category_slag, category_image, description) VALUES ('$cat',  '$slag', '$new', '$desc')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $_SESSION["success"] = "New Category Created Sucessfully.";
          header('location: ../categories.php');
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: ../add-category.php');
      }
    
}
elseif(isset($_GET["deletexx"])){
    $cat_id = $_GET["delete"];
    
    $dltqry = "DELETE FROM category WHERE category_id = '$cat_id'";
    
    if ($conn->query($dltqry)===TRUE){
          
          $_SESSION["success"] = "Category Deleted Sucessfully.";
          header('location: ../admin/categories.php');
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: ../admin/categories.php');
      }
    
    
}elseif(isset($_POST["edit-category"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["cat_id"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $slag = str_replace(' ', '-', $cat);
    $slag = strtolower($slag);
    $cat = ucwords($cat);

    
    $updqry = "UPDATE category SET category_name='$cat', category_slag='$slag', description='$desc'  WHERE category_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Category Updated Sucessfully.";
          header("location: ../edit-category.php?cat=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-category.php?cat=$cat_id");
      }
}elseif(isset($_POST["edit-cat-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-cat-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE category SET category_image ='$new'  WHERE category_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Category Image Updated Sucessfully.";
          header("location: ../edit-category.php?cat=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-category.php?cat=$cat_id");
      }


}
// Add new experience
elseif(isset($_POST["add-experience"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $slag = str_replace(' ', '-', $cat);
    $cat = ucwords($cat);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $cat_insert = "INSERT INTO experience ( experience_name, experience_slag, experience_image, description, short_description) VALUES ('$cat',  '$slag', '$new', '$desc', '$desc')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $_SESSION["success"] = "New Experience Added Sucessfully.";
          header('location: ../experiences.php');
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: ../add-experience.php');
      }
    
}elseif(isset($_POST["edit-experience"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["exp_id"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $slag = str_replace(' ', '-', $cat);
    $slag = strtolower($slag);
    $cat = ucwords($cat);

    
    $updqry = "UPDATE experience SET experience_name='$cat', experience_slag='$slag', description='$desc', short_description='$desc'  WHERE experience_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Experience Updated Sucessfully.";
          header("location: ../edit-experience.php?exp=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-experience.php?exp=$cat_id");
      }
}elseif(isset($_POST["edit-exp-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-exp-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE experience SET experience_image ='$new'  WHERE experience_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Experience Image Updated Sucessfully.";
          header("location: ../edit-experience.php?exp=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-experience.php?exp=$cat_id");
      }


}

// Add new destination
elseif(isset($_POST["add-destination"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    //$ccat = mysqli_real_escape_string($conn, $_POST["ccat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $loc = mysqli_real_escape_string($conn, $_POST["loc"]);
    $map = mysqli_real_escape_string($conn, $_POST["map"]);
    $slag = str_replace(' ', '-', $cat);
    $cat = ucwords($cat);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);

    $cat_insert = "INSERT INTO destination (destination_name, destination_slag, destination_image, description, location, map_iframe, country_id) VALUES ('$cat',  '$slag', '$new', '$desc', '$loc', '$map', '$country')";
    
    if ($conn->query($cat_insert)===TRUE){

        $dest_id =  $conn->insert_id;
          
          $_SESSION["success"] = "New Destination Added Sucessfully.";
          header("location: ../edit-destination.php?dest=$dest_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../add-destination.php");
      }
    
}
elseif(isset($_POST["add-destination-cats"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $dest_id = mysqli_real_escape_string($conn, $_POST["dest_id"]);

    $qry = "INSERT INTO destination_category (destination_id, category_id) VALUES ('$dest_id', '$cat') ";

    if ($conn->query($qry)===TRUE){
          
          $_SESSION["success"] = "Category Added Sucessfully.";
          header("location: ../edit-destination.php?dest=$dest_id#catsection");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-destination.php?dest=$dest_id#catsection");
      }
}
elseif(isset($_POST["add-destination-exp"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $dest_id = mysqli_real_escape_string($conn, $_POST["dest_id"]);

    $qry = "INSERT INTO destination_experience (destination_id, experience_id) VALUES ('$dest_id', '$cat') ";

    if ($conn->query($qry)===TRUE){
          
          $_SESSION["success"] = "Experience Added Sucessfully.";
          header("location: ../edit-destination.php?dest=$dest_id#catsection");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-destination.php?dest=$dest_id#catsection");
      }
}
elseif(isset($_GET["deldestcat"])){
    $cat = mysqli_real_escape_string($conn, $_GET["deldestcat"]);
    $dest_id = mysqli_real_escape_string($conn, $_GET["dest_id"]);

    $qry = "DELETE FROM destination_category WHERE destination_category_id = '$cat'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Category Deleted Sucessfully.";
        header("location: ../edit-destination.php?dest=$dest_id#catsection");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-destination.php?dest=$dest_id#catsection");
    }
}

elseif(isset($_GET["deldestexp"])){
    $cat = mysqli_real_escape_string($conn, $_GET["deldestexp"]);
    $dest_id = mysqli_real_escape_string($conn, $_GET["dest_id"]);

    $qry = "DELETE FROM destination_experience WHERE destination_experience_id = '$cat'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Experience Deleted Sucessfully.";
        header("location: ../edit-destination.php?dest=$dest_id#catsection");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-destination.php?dest=$dest_id#catsection");
    }
}
elseif(isset($_POST["edit-dest-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-dest-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE destination SET destination_image ='$new'  WHERE destination_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Destination Image Updated Sucessfully.";
          header("location: ../edit-destination.php?exp=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-destination.php?exp=$cat_id");
      }


}


// Add new destination
elseif(isset($_POST["edit-destination"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $ccat = mysqli_real_escape_string($conn, $_POST["ccat"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $loc = mysqli_real_escape_string($conn, $_POST["loc"]);
    $map = mysqli_real_escape_string($conn, $_POST["map"]);
    $dest_id = mysqli_real_escape_string($conn, $_POST["dest_id"]);
    $slag = str_replace(' ', '-', $cat);
    $cat = ucwords($cat);
    $slag = strtolower($slag);
   

   
    $cat_insert = "UPDATE destination SET destination_name='$cat', destination_slag='$slag', description='$desc', location='$loc', map_iframe='$map', country_id='$country', catchy_title='$ccat' WHERE destination_id = '$dest_id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "Destination Updated Sucessfully.";
          header("location: ../edit-destination.php?dest=$dest_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-destination.php?dest=$dest_id");
      }
    
}

//Add Country
if (isset($_POST["add-country"])) {
    $countryName = mysqli_real_escape_string($conn, $_POST["cat"]);
    $shortDesc = mysqli_real_escape_string($conn, $_POST["short_desc"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $initials = mysqli_real_escape_string($conn, $_POST["initials"]);

    // Slug generation
    $slug = str_replace(' ', '-', $countryName);
    $slug = strtolower($slug);
    $countryName = ucwords($countryName);

    // Handle photo upload
    $photoUploaded = false;
    if (isset($_FILES['photos']) && $_FILES['photos']['error'] == 0) {
        $fileName = $_FILES["photos"]["name"];
        $fileTmpName = $_FILES["photos"]["tmp_name"];
        $fileDestination = "../../uploads/" . $fileName;

        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            $newFileName = time() . "_" . $fileName;
            rename('../../uploads/' . $fileName, '../../uploads/' . $newFileName);
            $photoUploaded = true;
        } else {
            $_SESSION["error"] = "Failed to upload the photo. Please try again.";
            header("location: ../add-country.php");
            exit();
        }
    }

    // Handle flag upload
    $flagUploaded = false;
    if (isset($_FILES['flag']) && $_FILES['flag']['error'] == 0) {
        $flagName = $_FILES["flag"]["name"];
        $flagTmpName = $_FILES["flag"]["tmp_name"];
        $flagDestination = "../../uploads/" . $flagName;

        if (move_uploaded_file($flagTmpName, $flagDestination)) {
            $newFlagName = time() . "_" . $flagName;
            rename('../../uploads/' . $flagName, '../../uploads/' . $newFlagName);
            $flagUploaded = true;
        } else {
            $_SESSION["error"] = "Failed to upload the flag. Please try again.";
            header("location: ../add-country.php");
            exit();
        }
    }

    // Only proceed with database insertion if both files were uploaded successfully
    if ($photoUploaded && $flagUploaded) {
        $insertQuery = "INSERT INTO country (country_name, country_slag, country_short_description, country_description, country_image, country_flag, country_initials) VALUES ('$countryName', '$slug', '$shortDesc', '$desc', '$newFileName', '$newFlagName', '$initials')";

        if ($conn->query($insertQuery) === TRUE) {
            $_SESSION["success"] = "Country Added Successfully.";
            header("location: ../add-country.php");
        } else {
            $_SESSION["error"] = "Error Occurred. Please Try Again. " . $conn->error;
            header("location: ../add-country.php");
        }
    }
}



//Edit Country
elseif(isset($_POST["edit-country"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["cou_id"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $initials = mysqli_real_escape_string($conn, $_POST["initials"]);
    $short_desc = mysqli_real_escape_string($conn, $_POST["short_desc"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $slag = str_replace(' ', '-', $cat);
    $slag = strtolower($slag);
    $cat = ucwords($cat);

    
    $updqry = "UPDATE country SET country_name='$cat', country_initials='$initials', country_slag='$slag', country_short_description='$short_desc', country_description='$desc'  WHERE country_id  = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Country Info Updated Sucessfully.";
          header("location: ../edit-country.php?cat=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-country.php?cat=$cat_id");
      }
}

//Delete Country
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['country_id'])) {
    $country_id = mysqli_real_escape_string($conn, $_POST['country_id']);

    // Delete the country record from the database
    $deleteQuery = "DELETE FROM country WHERE country_id = '$country_id'";

    if ($conn->query($deleteQuery) === TRUE) {
        $_SESSION["success"] = "Country deleted successfully.";
    } else {
        $_SESSION["error"] = "Error occurred while deleting the country: " . $conn->error;
    }

    header("Location: ../countries.php");
}


//Edit Country Image
elseif(isset($_POST["edit-cou-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-cou-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE country SET country_image ='$new'  WHERE country_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Country Image Updated Sucessfully.";
          header("location: ../edit-country.php?cat=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-country.php?cat=$cat_id");
      }


}
//Edit Country Flag
elseif (isset($_POST["edit-cou-flag"])) {
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-cou-flag"]);

    if (isset($_FILES['flag']) && $_FILES['flag']['error'] == 0) {
        $flagName = $_FILES["flag"]["name"];
        $flagTmpName = $_FILES["flag"]["tmp_name"];

        // Move the uploaded flag to the desired location
        $flagDestination = "../../uploads/" . $flagName;

        if (move_uploaded_file($flagTmpName, $flagDestination)) {
            $newFlagName = time() . "_" . $flagName;
            rename('../../uploads/' . $flagName, '../../uploads/' . $newFlagName);

            $updqry = "UPDATE country SET country_flag ='$newFlagName' WHERE country_id = '$cat_id'";

            if ($conn->query($updqry) === TRUE) {
                $_SESSION["success"] = "Country Flag Updated Successfully.";
                header("location: ../edit-country.php?cat=$cat_id");
            } else {
                $_SESSION["error"] = "Error Occurred. Please Try Again. " . $conn->error;
                header("location: ../edit-country.php?cat=$cat_id");
            }
        } else {
            $_SESSION["error"] = "Failed to upload the flag. Please try again.";
            header("location: ../edit-country.php?cat=$cat_id");
        }
    } else {
        $_SESSION["error"] = "No flag uploaded or an error occurred during the upload.";
        header("location: ../edit-country.php?cat=$cat_id");
    }
}


// Add new package
elseif(isset($_POST["add-package"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $stit = mysqli_real_escape_string($conn, $_POST["stit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $dates = mysqli_real_escape_string($conn, $_POST["dates"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat_id"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $curr = mysqli_real_escape_string($conn, $_POST["currency"]);
    $dates = $dates." ".date("Y");
    
    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);

    $cat_insert = "INSERT INTO package (title, title_slag, subtitle, package_description, currency, price, package_image, last_modified, travel_dates, category_id, year) VALUES ('$tit',  '$slag', '$stit', '$desc', '$curr','$price', '$new', '$date', '$dates', '$cat','$year')";
    
    if ($conn->query($cat_insert)===TRUE){

        $dest_id =  $conn->insert_id;
          
          $_SESSION["success"] = "New Package Added Sucessfully.";
          header("location: ../edit-package.php?pack=$dest_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../add-package.php");
      }
    
}
// Edit package
elseif(isset($_POST["edit-package"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $stit = mysqli_real_escape_string($conn, $_POST["stit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $pack_id = mysqli_real_escape_string($conn, $_POST["pack_id"]);
    $dates = mysqli_real_escape_string($conn, $_POST["dates"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $cat_id = mysqli_real_escape_string($conn, $_POST["cat_id"]);
    $curr = mysqli_real_escape_string($conn, $_POST["currency"]);
    $dates = $dates." ".date("Y");

    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
   

   
    $cat_insert = "UPDATE package SET title='$tit', title_slag='$slag', subtitle='$stit', package_description='$desc', currency='$curr', price='$price', package_status='$status', last_modified='$date', travel_dates='$dates', category_id='$cat_id', year='$year' WHERE package_id  = '$pack_id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "Package Updated Sucessfully.";
          header("location: ../edit-package.php?pack=$pack_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$pack_id");
      }
    
}
elseif(isset($_GET["add-packit"])){
    $pack_id = mysqli_real_escape_string($conn, $_GET["add-packit"]);

    $chkres = $conn->query("SELECT * FROM package_day WHERE package_id='$pack_id' ORDER BY day DESC LIMIT 1");

    if($chkres->num_rows == 0){
        $newday = 1;
    }else{
        $chkrow = $chkres->fetch_assoc();
        $newday = $chkrow['day'] + 1;
    }
    
    $qry = "INSERT INTO package_day (package_id, day) VALUES ('$pack_id', '$newday')";

    if ($conn->query($qry)===TRUE){

          
        $_SESSION["success"] = "Itinerary Added Sucessfully.";
        header("location: ../edit-package.php?pack=$pack_id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-package.php?pack=$pack_id");
    }

}

elseif(isset($_POST["edit-pack-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-pack-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE package SET package_image ='$new'  WHERE package_id = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Package Image Updated Sucessfully.";
          header("location: ../edit-package.php?pack=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$cat_id");
      }


}

elseif(isset($_POST["edit-itinerary"])){
    $sdesc = mysqli_real_escape_string($conn, $_POST["sdesc"]);
    $ldesc = mysqli_real_escape_string($conn, $_POST["ldesc"]);
    $pack_id = mysqli_real_escape_string($conn, $_POST["pack_id"]);
    $pack_day_id = mysqli_real_escape_string($conn, $_POST["pack_day_id"]);
  

   
    $cat_insert = "UPDATE package_day SET short_itinerary='$sdesc', long_itinerary='$ldesc' WHERE package_day_id  = '$pack_day_id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "Itinerary Updated Sucessfully.";
          header("location: ../edit-package.php?pack=$pack_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$pack_id");
      }
    
}

elseif(isset($_POST["add-pack-dests"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $pack_id = mysqli_real_escape_string($conn, $_POST["pack_id"]);
    $pack_day_id = mysqli_real_escape_string($conn, $_POST["pack_day_id"]);

    $qry = "INSERT INTO package_day_destination (destination_id, package_day_id) VALUES ('$cat', '$pack_day_id') ";

    if ($conn->query($qry)===TRUE){
          
          $_SESSION["success"] = "Destination Added Sucessfully.";
          header("location: ../edit-package.php?pack=$pack_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$pack_id");
      }
}
elseif(isset($_POST["add-pack-exp"])){
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $pack_id = mysqli_real_escape_string($conn, $_POST["pack_id"]);
    $pack_day_id = mysqli_real_escape_string($conn, $_POST["pack_day_id"]);

    $qry = "INSERT INTO package_day_experience (experience_id, package_day_id) VALUES ('$cat', '$pack_day_id') ";

    if ($conn->query($qry)===TRUE){
          
          $_SESSION["success"] = "Experience Added Sucessfully.";
          header("location: ../edit-package.php?pack=$pack_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$pack_id");
      }
}

elseif(isset($_GET["delpackdest"])){
    $cat = mysqli_real_escape_string($conn, $_GET["delpackdest"]);
    $pack_id = mysqli_real_escape_string($conn, $_GET["pack_id"]);

    $qry = "DELETE FROM package_day_destination WHERE package_day_destination_id = '$cat'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Destination Removed Sucessfully.";
        header("location: ../edit-package.php?pack=$pack_id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-package.php?pack=$pack_id");
    }
}

elseif(isset($_GET["delpackexp"])){
    $cat = mysqli_real_escape_string($conn, $_GET["delpackexp"]);
    $pack_id = mysqli_real_escape_string($conn, $_GET["pack_id"]);

    $qry = "DELETE FROM package_day_experience WHERE package_day_experience_id = '$cat'";

    if ($conn->query($qry)===TRUE){
          
        $_SESSION["success"] = "Experience Removed Sucessfully.";
        header("location: ../edit-package.php?pack=$pack_id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-package.php?pack=$pack_id");
    }
}


elseif(isset($_POST["seo-country"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE country SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE country_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-country.php?cat=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-country.php?cat=$id");
      }
    
}


elseif(isset($_POST["seo-category"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE category SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE category_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-category.php?cat=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-category.php?cat=$id");
      }
    
}


elseif(isset($_POST["seo-exp"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE experience SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE experience_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-experience.php?exp=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-experience.php?exp=$id");
      }
    
}



elseif(isset($_POST["seo-dest"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE destination SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE destination_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-destination.php?dest=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-destination.php?dest=$id");
      }
    
}



elseif(isset($_POST["seo-package"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE package SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE package_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-package.php?pack=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-package.php?pack=$id");
      }
    
}elseif(isset($_POST["add-venue"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $loc = mysqli_real_escape_string($conn, $_POST["loc"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $map = mysqli_real_escape_string($conn, $_POST["map"]);
    $slag = str_replace(' ', '-', $name);
    $name = ucwords($name);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../tb-venues/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../tb-venues/'.$file_name , '../../tb-venues/'.$new);

			

    $cat_insert = "INSERT INTO tb_venue (location_id, venue_name, venue_slag, description, venue_type, price, venue_maps) VALUES ('$loc',  '$name', '$slag', '$desc', '$type', '$price', '$map')";
    
    if ($conn->query($cat_insert)===TRUE){

        $dest_id =  $conn->insert_id;

        $imgins = "INSERT INTO tb_venue_image (venue_id, image) VALUES ('$dest_id', '$new')";
          
          $_SESSION["success"] = "New Venue Added Sucessfully.";
          header("location: ../tb-venues.php");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../tb-venues.php");
      }
    
}

elseif(isset($_GET["delete-pack-day"])){
    $day_id = mysqli_real_escape_string($conn, $_GET["delete-pack-day"]);
    $pack_id = mysqli_real_escape_string($conn, $_GET["pack_id"]);

    $qry = "DELETE FROM package_day WHERE package_day_id='$day_id'";

    if ($conn->query($qry)===TRUE){

          
        $_SESSION["success"] = "Package Day Deleted Sucessfully.";
        header("location: ../edit-package.php?pack=$pack_id");
        
    }else{
        $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
        header("location: ../edit-package.php?pack=$pack_id");
    }
  
}

// Add new Blog
if(isset($_POST["add-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    
    $slag = str_replace(' ', '-', $tit);
    $tit = ucwords($tit);
    $slag = strtolower($slag);
    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
		
    
    $cat_insert = "INSERT INTO blog(blog_title, blog_slag, blog_description, blog_content, blog_image, blog_category, blog_category_color, date_created) VALUES ('$tit',  '$slag', '$desc', '$content', '$new', '$cat', '$cat_color', '$date')";
    
    if ($conn->query($cat_insert)===TRUE){
          
          $last_id = $conn->insert_id;
          $_SESSION["success"] = "New Blog Created Sucessfully.";
          header('location: ../edit-blog.php?blog='.$last_id);
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header('location: ../add-blog.php');
      }
    
}
elseif(isset($_POST["edit-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $cat = mysqli_real_escape_string($conn, $_POST["cat"]);
    $cat_color = mysqli_real_escape_string($conn, $_POST["cat_color"]);
    $status = mysqli_real_escape_string($conn, $_POST["status"]);
    $id = mysqli_real_escape_string($conn, $_POST["blog_id"]);
    $slag = str_replace(' ', '-', $tit);
    $slag = strtolower($slag);
    $tit = ucwords($tit);

    
    $updqry = "UPDATE blog SET blog_title='$tit', blog_slag='$slag', blog_description='$desc', blog_content='$content', blog_category='$cat', blog_category_color='$cat_color', blog_status='$status' WHERE blog_id  = '$id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Updated Sucessfully.";
          header("location: ../edit-blog.php?blog=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-blog.php?blog=$id");
      }
}elseif(isset($_POST["edit-blog-img"])){
    $cat_id = mysqli_real_escape_string($conn, $_POST["edit-blog-img"]);

    $image = $_FILES['photos']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    
    
    $file_name = $_FILES["photos"]["name"];
    $_FILES["photos"]["type"];
    $tmp_file = $_FILES["photos"]["tmp_name"];
    
    $destination = "../../uploads/" . $file_name;
    
    move_uploaded_file($tmp_file, $destination);
    $new = $filedate.$file_name;
    $new_name = rename('../../uploads/'.$file_name , '../../uploads/'.$new);
    
    $updqry = "UPDATE blog SET blog_image ='$new'  WHERE blog_id  = '$cat_id'";
    
    if ($conn->query($updqry)===TRUE){
          
          $_SESSION["success"] = "Blog Image Updated Sucessfully.";
          header("location: ../edit-blog.php?blog=$cat_id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-blog.php?blog=$cat_id");
      }


}

elseif(isset($_POST["seo-blog"])){
    $tit = mysqli_real_escape_string($conn, $_POST["tit"]);
    $desc = mysqli_real_escape_string($conn, $_POST["desc"]);
    $kw = mysqli_real_escape_string($conn, $_POST["kw"]);
    $id = mysqli_real_escape_string($conn, $_POST["elemid"]);
  

   
    $cat_insert = "UPDATE blog SET seo_title='$tit', seo_description='$desc', seo_keywords='$kw' WHERE blog_id  = '$id'";
    
    if ($conn->query($cat_insert)===TRUE){

          
          $_SESSION["success"] = "SEO Information Updated Sucessfully.";
          header("location: ../edit-blog.php?blog=$id");
          
      }else{
          $_SESSION["error"] = "Error Occured. Please Try Again". $conn->error;
          header("location: ../edit-blog.php?blog=$id");
      }
    
}
elseif(isset($_GET["duplicate_package"])){
    $pack_id = mysqli_real_escape_string($conn, $_GET["duplicate_package"]);


    //Duplicate current package
    $packqry = "INSERT INTO package (title, title_slag, subtitle, package_description, currency, price, travel_dates, package_image, category_id, package_status, last_modified, seo_title, seo_description, seo_keywords) SELECT  CONCAT(title, ' [DUPLICATE]') as title, title_slag, subtitle, package_description, currency, price, travel_dates, package_image, category_id, 0 as package_status, '$date' as last_modified, seo_title, seo_description, seo_keywords FROM package WHERE package_id = $pack_id";

    $packres = $conn->query($packqry);
    
    //Fetch id of new package
    $newpackid = $conn->insert_id;

    //Fetch package days
    $packdaysres = $conn->query("SELECT * FROM package_day WHERE package_id='$pack_id'");
    while($packdayrow = $packdaysres->fetch_assoc()){

        $pack_day_id = $packdayrow['package_day_id'];

        //Insert package_day
        $packdayins = "INSERT INTO package_day (package_id, day, short_itinerary, long_itinerary) SELECT $newpackid as package_id, day, short_itinerary, long_itinerary FROM package_day WHERE package_day_id=$pack_day_id";
        $packdayinsres = $conn->query($packdayins);
        $newpackdayid = $conn->insert_id;

        //Duplicate package exps
        $packdayexpins = "INSERT INTO package_day_experience (package_day_id, experience_id) SELECT $newpackdayid as package_day_id, experience_id FROM package_day_experience WHERE package_day_id=$pack_day_id";
        $packdayexpinsres = $conn->query($packdayexpins);

        //Duplicate package dests
        $packdaydestins = "INSERT INTO package_day_destination (package_day_id, destination_id) SELECT $newpackdayid as package_day_id, destination_id FROM package_day_destination WHERE package_day_id=$pack_day_id";
        $packdaydestinsres = $conn->query($packdaydestins);
    }

        

    
         
        $_SESSION["success"] = "Package Duplicated Sucessfully.";
        header("location: ../edit-package.php?pack=$newpackid");
        
   
}

elseif(isset($_POST["exp_priority"])){
    $id = mysqli_real_escape_string($conn, $_POST["exp_priority"]);
    $priority = mysqli_real_escape_string($conn, $_POST["value"]);

    $qry = "UPDATE experience SET priority = $priority WHERE experience_id='$id'";

    if($conn->query($qry) === TRUE){
        echo 1;
    }else{
        echo 0;
    }
}


elseif(isset($_POST["dest_priority"])){
    $id = mysqli_real_escape_string($conn, $_POST["dest_priority"]);
    $priority = mysqli_real_escape_string($conn, $_POST["value"]);

    $qry = "UPDATE destination SET priority = $priority WHERE destination_id='$id'";

    if($conn->query($qry) === TRUE){
        echo 1;
    }else{
        echo 0;
    }
}


elseif(isset($_POST["pack_priority"])){
    $id = mysqli_real_escape_string($conn, $_POST["pack_priority"]);
    $priority = mysqli_real_escape_string($conn, $_POST["value"]);

    $qry = "UPDATE package SET priority = $priority WHERE package_id='$id'";

    if($conn->query($qry) === TRUE){
        echo 1;
    }else{
        echo 0;
    }
}
?>