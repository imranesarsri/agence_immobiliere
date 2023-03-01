<?php
if(isset($_POST["subupdateEmail"])){
  $_SESSION['Email'] = $_POST['inpEmail'];
  echo "ddd";
  echo  $_SESSION['Email'] ;
}else{

  $select = "SELECT * FROM `client` WHERE `Email` = '$_SESSION[Email]'";
  $result = $db->query($select);
  $NomProfil = "";
  $PrenomProfil = "";
  $EmailProfil = "";
  $Mot_pasProfil = "";
  $N_teleProfil = "";
  
  $resultMessagEmail = "";
  
    while($row = $result->fetch()){
      $NomProfil = $row["Nom"];
      $PrenomProfil = $row["Prenom"];
      $EmailProfil = $row["Email"];
      $Mot_pasProfil =md5($row["Mot_pas"]);
      $N_teleProfil =  $row["N_tele"];
      $_SESSION["NomProfil"] = $row["Nom"];
      $_SESSION["PrenomProfil"] = $row["Prenom"];
      $_SESSION["EmailProfil"] = $row["Email"];
  
    }
}

  ?>