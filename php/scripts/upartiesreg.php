<?php

include('../../db.php');

if(isset($_POST['partyreg'])){


    $PartyName = $_POST['PartyName'];
    $PartyChairman = $_POST['PartyChairman'];
    $PartyPresident = $_POST['PartyPresident'];
    $PartySize = $_POST['PartySize'];
   

    $img = $_FILES['PartyLogo']['name'];
    $img_tmp = $_FILES['PartyLogo']['tmp_name'];
    $targetfile= "../../uploads/$img";
    move_uploaded_file($img_tmp,$targetfile);



    $insert= $con->query("INSERT INTO `parties`(`PartyName`, `PartyLogo`, `PartyChairman`, `PartyPresident`, `PartySize`) VALUES ('$PartyName','$img','$PartyChairman','$PartyPresident','$PartySize')");



}


?>