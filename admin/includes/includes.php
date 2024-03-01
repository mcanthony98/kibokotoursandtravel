<?php
session_start();
require "../includes/connect.php";

function textVenueType($status){
    $output = "";

    if($status == 1){
        $output = '<span class="text-success">Budget</span>';
    }elseif($status == 2){
        $output = '<span class="text-warning">Mid-Luxury</span>';
    }elseif($status == 3){
        $output = '<span class="text-info">Luxury</span>';
    }

    return $output;

}
?>