<?php
    $con = mysqli_connect("localhost","root","","church_management_system");

    if(!$con){
        die("Connection Error").$con->error;
    }
?>