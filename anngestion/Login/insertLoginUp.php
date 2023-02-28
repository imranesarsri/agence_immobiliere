<?php



session_start();

include("connect.php");
include("createTable.php");


// INSERT database

$resultMessagEmail = "";
$bordEmail = "";
$valuePrenom = "";
$valueNom = "";
$valueEmail = "";
$valuePassword = "";
$valueEnterPassw = "";
$valueinpNumber = "";

if(isset($_POST['subBtSignUp'])){

    $Email  = $_POST['inpEmail'];

    $selectEmail = "SELECT * FROM `client` WHERE `Email` = '$Email'";
    $resultEmail = $db->query($selectEmail);



    if($resultEmail->rowCount() <= 0){
        $_SESSION['Email'] = $Email;
        header("Location:../home/index.php");
        
        // INSERT database         
        // sha1 md5
        $Nom = $_POST['inpPrenom'];
        $Prenom = $_POST['inpNom'];
        $Email = $_POST['inpEmail'];
        $Mot_pas = md5($_POST['inpPassword']);
        $N_tele = $_POST['inpNumber'];
    
        $stmt = $db->prepare("INSERT INTO client(`Nom` ,`Prenom` ,`Email` ,`Mot_pas` ,`N_tele`)
                            VALUES(:Nom,:Par,:Ema,:Pas,:Tel)");
    
        $stmt->execute([
            'Nom'  => $Nom,
            'Par'  => $Prenom,
            'Ema'  => $Email,
            'Pas'  => $Mot_pas,
            'Tel'  => $N_tele
        ]);
        
        
    }else{
        $resultMessagEmail = "The email has already been used";
        $bordEmail = "border-bottom: 2px solid red";
        $valuePrenom = "$_POST[inpPrenom]";
        $valueNom = "$_POST[inpNom]";
        $valueEmail = "$_POST[inpEmail]";
        $valuePassword = "$_POST[inpPassword]";
        $valueEnterPassw = "$_POST[inpEnterPassw]";
        $valueinpNumber = "$_POST[inpNumber]";

        
    }

}; 









