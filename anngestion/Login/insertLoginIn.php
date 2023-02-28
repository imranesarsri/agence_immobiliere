<?php
session_start();

include("connect.php");
include("createTable.php");


// INSERT database

$resultMessagEmail = "";
$resultMessagPassw = "";
$bordEmail = "";
$bordPassw = "";
$valueEmail = "";
if(isset($_POST['subBtSignIn'])){

    $Email  = $_POST['inpEmail'];
    $md5 = md5($_POST['inpPassword']);

    $selectEmail = "SELECT * FROM `client` WHERE `Email` = '$Email'";
    $resultEmail = $db->query($selectEmail);
    $selectPassw = "SELECT * FROM `client` WHERE `Email` = '$Email' AND `Mot_pas` = '$md5' ";
    $resultPassw = $db->query($selectPassw);


    if($resultEmail->rowCount() > 0){
        if($resultPassw->rowCount() > 0){
            $_SESSION['Email'] = $Email;
            header("Location:../home/index.php");
        }else {
            $resultMessagPassw = "This email does not exist";
            $bordPassw ="border-bottom: 2px solid red";
            $valueEmail = "$_POST[inpEmail]";
        }
    }else{
        $resultMessagEmail = "The password is wrong";
        $bordEmail = "border-bottom: 2px solid red";


    }

}; 





