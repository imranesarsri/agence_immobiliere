
<?php

include("../Login/connect.php");
include("../Login/createTable.php");

// signe out
if(isset($_POST['btnSignOutModal'])){
    session_unset();
};


// Update les information [fersname and lastname and phone number]
if(isset($_POST["subupdate"])){
try{
    $update = "UPDATE
                    `client` 
                SET
                    `Prenom`  = '$_POST[inpPrenom]',
                    `Nom`    =  '$_POST[inpNom]',
                    `N_tele` =  '$_POST[inpNumber]'
                WHERE
                    Email = '$_SESSION[Email]'";
    $db->query($update);
    }
    catch(PDOException $e) {
        die('error :'.$e->getMessage());
    }
};
// delete account

if(isset($_POST['btnDeleteAcount'])){




    // echo $_SESSION["Email"];
    


    $select =  "SELECT * FROM `client` WHERE `Email` = '$_SESSION[Email]'";
    $result =  $db->query($select);
    
    while($row = $result->fetch()){
        $N_cl = $row["N_cl"];
    }
    // echo $N_cl ;


    $sql = "SELECT * FROM `annonce` WHERE `N_cl`= '$N_cl'";
    $result2 = $db->query($sql);

    while($row = $result2->fetch()){
        $sql = "DELETE FROM `galerie_images` WHERE `N_ann`= '$row[N_ann]' ";
        $result = $db->query($sql);
        $select = "DELETE  FROM `annonce` WHERE `N_ann`= '$row[N_ann]'";
        $result = $db->query($select);
    }
    
    $select = "DELETE  FROM `client` WHERE `N_cl`= '$N_cl'";
    $result = $db->query($select);
    


    session_unset();



};


?>

<?php 
// inpEmail currentPassw newPasssw subupdateEmail
// if(isset($_POST["subupdateEmail"])){
// $selectEmail ="SELECT * FROM `client` WHERE `Email` = '$_POST[inpEmail]'";
// $resultEmail = $db->query($selectEmail);
// if($resultEmail->rowCount() >= 1){
//     if($_POST["inpEmail"] == $_SESSION["Email"]){
//         $updateEmail = "UPDATE
//                             `client` 
//                         SET
//                             `Email`  =' $_POST[inpEmail]'
//                         WHERE
//                             Email = '$_SESSION[Email]'";

//     // $_SESSION['Email'] = $_POST['inpEmail'];
//         $db->query($updateEmail);
//         // $_SESSION["Email"] = $_POST["inpEmail"];


//     }else{
//         echo "email mkynch fdatabase";
//     }
// }else {
//     if("$_POST[inpEmail]" == NULL){
    
//         $updateEmail = "UPDATE
//                             `client` 
//                         SET
//                             `Email`  = '$_SESSION[Email]'
//                         WHERE
//                             Email = '$_SESSION[Email]'";

// // $_SESSION["Email"] =$_SESSION["Email"];
//     $db->query($updateEmail);


//     }else{
//         $updateEmail = "UPDATE
//                             `client` 
//                         SET
//                             `Email`  = '$_POST[inpEmail]',
//                         WHERE
//                             Email = '$_SESSION[Email]'";

// // $_SESSION["Email"] =$_POST["inpEmail"];
//         $db->query($updateEmail);


//     }
// }

// }

?>