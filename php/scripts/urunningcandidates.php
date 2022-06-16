<?php

include('../../db.php');

if(isset($_POST['reg'])){


    $candname = $_POST['candname'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];
    $age = $_POST['age'];
   



    $insert= $con->query("INSERT INTO `rcd`(`candname`, `cnic`, `address`, `age`) VALUES ('$candname','$cnic','$address','$age')");



}


?>