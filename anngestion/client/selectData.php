<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$select = "SELECT * FROM `client` WHERE `Email` = '$_SESSION[Email]'";
$result =  $db->query($select);

  while($row = $result->fetch()){
    $N_cl = $row["N_cl"];
  }

  if (isset($_POST['btnSerch'])) {
    $searched_value = $_POST['searchResult'];
    
  
    if (isset($_POST['filter_search']) == 'All') {

      $sql = "SELECT * FROM annonce WHERE Title LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' OR Ville LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' OR Categorie LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' OR `Type` LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' OR Prix LIKE '{$searched_value}%'  AND `N_cl`= '$N_cl'   ORDER BY Title ASC ";
      $result2 = $db->query($sql);

    } elseif (isset($_POST['filter_search']) == 'Ville') {
  
      $sql = "SELECT * FROM annonce WHERE `Ville` LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' ORDER BY Title ASC ";
      $result2 = $db->query($sql);

    } elseif (isset($_POST['filter_search']) == 'Categorie') {

      $sql = "SELECT * FROM annonce WHERE `Categorie` LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' ORDER BY Title ASC ";
      $result2 = $db->query($sql);


    } elseif (isset($_POST['filter_search']) == 'Type') {

      $sql = "SELECT * FROM annonce WHERE `Type` LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' ORDER BY Title ASC ";
      $result2 = $db->query($sql);

    } elseif (isset($_POST['filter_search']) == 'Prix') {

      $sql = "SELECT * FROM annonce WHERE Prix LIKE '{$searched_value}%' AND `N_cl`= '$N_cl' ORDER BY Title ASC ";
      $result2 = $db->query($sql);

    }
  }else if (isset($_POST['btnSort'])){

    $resultChoix = $_POST['sortSelectbyAsc'];
  
    $sql = "SELECT * FROM annonce  WHERE `N_cl`= '$N_cl' ORDER BY $resultChoix ASC";
    $result2 = $db->query($sql);

  }else {
    $sql = "SELECT * FROM `annonce` WHERE `N_cl`= '$N_cl'";
    $result2 = $db->query($sql);
  }
  
  // ===========================
  if ($result2 == null) {
    echo "<h3 class='m-5'>Unfortunately, there are no matches for your search</h3>";
    
  }

  while($row = $result2->fetch()){
    $N_ann = $row["N_ann"];

    $sqlimg ="SELECT * FROM `galerie_images` WHERE `N_ann` ='$N_ann' AND `Img_type` = 1";
    $resultimg = $db->query($sqlimg);
?>
    <div class="card d-inline-block m-1" style="width: 18rem;">
    <?php
    while($rowimg = $resultimg->fetch()){
      $imgPrans = $rowimg["Img_url"] ;
    ?>
          <img style="height: 200px;" src="<?php echo $rowimg["Img_url"] ?>" class="card-img-top" alt="<?php echo $rowimg["Img_url"] ?>">
    <?php
    }
    ?>
        <div class="card-body">
            <h5 class="card-title">Title : <?php echo $row["Title"] ?>.</h5>
            <h5 class="card-title">Prix : <?php echo $row["Prix"] ?>.</h5>
            <h5 class="card-title">Categorie : <?php echo $row["Categorie"] ?>.</h5>
            <h5 class="card-title">Type : <?php echo $row["Type"] ?>.</h5>
            <h5 class="card-title">Ville : <?php echo $row["Ville"] ?>.</h5>
            <div class="d-flex justify-content-center gap-3  mt-4">
              <button  data-bs-toggle="modal" data-bs-target="#delete<?php echo $row["N_ann"] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row["N_ann"] ?>" class="btn btn-primary"><i class="fa-solid fa-calendar-week"></i></button>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?= $row["N_ann"] ?>" ><i class="fa-solid fa-pen-to-square"></i></button>
              <?php
              include("UpdateModal.php");
              include("updateScript.php");
              ?>
            </div>
        </div>
    </div>
<?php
include("pageDetai.php");
?>
<?php
include("delete.php");
  }
?>
</body>
</html>
