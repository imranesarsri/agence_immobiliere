<?php

if(isset($_POST["updateData"])){










// echo $_POST["sdssdsd"];
// print_r($imgslist);
// $vv = $imgslist[1];
// print_r($imgshidden);

// echo $_POST["hidden251"];












$id =  $_POST["updateData"];
$imgLink = "";
    if($_POST["imagePrans"]== NULL){
        $imgLink = $_POST["imagePransLink"];
    }else{
        $imgLink = "uploads/$_POST[imagePrans]";

        };


try{   

    $update = "UPDATE `annonce` SET `Title`='$_POST[Title]',
    `Code_postal`='$_POST[Code_postal]',`Ville`='$_POST[Ville]',
    `Adresse`='$_POST[Adresse]',`Description`='$_POST[Description]',`Prix`='$_POST[Prix]',`Type`='$_POST[Type]',
    `Categorie`='$_POST[Categorie]', `D_der_mdf` = date('Y-m-d') WHERE `N_ann` = '$id' ";
    $db->query($update);

    $sqlImg = "UPDATE `galerie_images` SET `Img_url` = '$imgLink' WHERE `Img_type`= '1' AND `N_ann` ='$id' ";
    $db->query($sqlImg);




    }catch(PDOException $e) {
        die('error :'.$e->getMessage());
    }
    
    
};