<?php

if (isset($_POST['btnSerch'])) {
  $searched_value = $_POST['search'];

  if (isset($_POST['filter_search']) == 'All') {

      $statement = $db->prepare("SELECT * FROM annonce WHERE Title LIKE '{$searched_value}%' OR Ville LIKE '{$searched_value}%' OR Categorie LIKE '{$searched_value}%' OR `Type` LIKE '{$searched_value}%' OR Prix LIKE '{$searched_value}%'  ORDER BY Title ASC ") ;
      $statement->execute();
      $announces = $statement->fetchAll();
  } elseif (isset($_POST['filter_search']) == 'Ville') {

      $statement = $db->prepare("SELECT * FROM annonce WHERE Ville LIKE '{$searched_value}%' ORDER BY Title ASC ");
      $statement->execute();
      $announces = $statement->fetchAll();
  } elseif (isset($_POST['filter_search']) == 'Categorie') {

      $statement = $db->prepare("SELECT * FROM annonce WHERE Categorie LIKE '{$searched_value}%'  ORDER BY Title ASC ");
      $statement->execute();
      $announces = $statement->fetchAll();
  } elseif (isset($_POST['filter_search']) == 'Type') {

      $statement = $db->prepare("SELECT * FROM annonce WHERE `Type` LIKE '{$searched_value}%'  ORDER BY Title ASC ");
      $statement->execute();
      $announces = $statement->fetchAll();
  } elseif (isset($_POST['filter_search']) == 'Prix') {

      $statement = $db->prepare("SELECT * FROM annonce WHERE Prix LIKE '{$searched_value}%'  ORDER BY Title ASC ");
      $statement->execute();
      $announces = $statement->fetchAll();
  }
}else if (isset($_POST['btnSort'])){
  // echo $_POST['sortSelectbyAsc'] ;
  $resultChoix = $_POST['sortSelectbyAsc'];

  $statement = $db->prepare("SELECT * FROM annonce  ORDER BY $resultChoix ASC");
  $statement->execute();
  $announces = $statement->fetchAll();

}else {
  $statement = $db->prepare("SELECT * FROM annonce");
  $statement->execute();
  $announces = $statement->fetchAll();
}

// ===========================
if ($announces == null) {
  echo "<h3 class='m-5'>Unfortunately, there are no matches for your search</h3>";  
  // $id = "null";
}

// $statement = @ "SELECT * FROM `client` WHERE `Email` = '$_SESSION[Email]'";
// $result = $db->query($statement);

  // while($row = $result->fetch()){
  //   $N_cl = $row["N_cl"];
  // }


  $sql = "SELECT * FROM `annonce`";
  $result2 = $db->query($sql);

foreach ($announces as $row) {

    $N_ann = $row["N_ann"];

    $sqlimg ="SELECT * FROM `galerie_images` WHERE `N_ann` ='$N_ann' AND `Img_type` = 1";
    $resultimg = $db->query($sqlimg);

?>
    <div class="card d-inline-block m-1 mt-4 ms-3 me-3 " style="width: 18rem;">
    <?php
    while($rowimg = $resultimg->fetch()){
    $imgPrans = $rowimg["Img_url"] ;
    ?>
        <img style="height: 200px;" src="../client/<?php echo $rowimg["Img_url"] ?>" class="card-img-top" alt="<?php echo $rowimg["Img_url"] ?>">
    <?php
    }
    ?>
            <div class="card-body">
            <h5 class="card-title">Title : <?php echo $row["Title"] ?>.</h5>
            <h5 class="card-title">Prix : <?php echo $row["Prix"] ?>.</h5>
            <h5 class="card-title">Categorie : <?php echo $row["Categorie"] ?>.</h5>
            <h5 class="card-title">Type : <?php echo $row["Type"] ?>.</h5>
            <h5 class="card-title">Ville : <?php echo $row["Ville"] ?>.</h5>              
              <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row["N_ann"] ?>">Details</a>
            </div>
        </div>

    </div>

    <!-- ================================= Modal detail ================================= -->


    <div class="modal fade" id="detail<?php echo $row["N_ann"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Page détai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div>
            <h5 class="mt-3 mb-3">image principale :</h5>
            <img  style="width: 300px;height: auto;border-radius: 0%;"  src="../client/<?php echo $imgPrans ?>" class="card-img-top" alt="<?php echo $imgPrans ?>">
          </div>
          <h5 class="mt-3 mb-3">Deutres image :</h5>
          <div class="d-flex gap-3 flex-wrap mt-3 mb-3 ms-5 container">

            <?php
                  $sqlimgsec ="SELECT * FROM `galerie_images` WHERE `N_ann` ='$N_ann' AND `Img_type` = 0";
                  $resultimgsec = $db->query($sqlimgsec);

                  while($rowimgsec = $resultimgsec->fetch()){
          ?>
          <img style="border-radius:0% ; white:200px ; height:auto" src="../client/<?php echo $rowimgsec['Img_url'] ?>" alt="<?php echo $rowimgsec['Img_url'] ?>">
          <?php
                  }
          ?>
          </div>
        </div>
      <h5 class="card-title">Title : <?php echo $row["Title"] ?>.</h5>
      <h5 class="card-title">Prix : <?php echo $row["Prix"] ?>DH . </h5>
            <h5 class="card-title">Date de publication : <?php echo $row["D_pub"] ?>.</h5>
            <h5 class="card-title">Date derner mdfication : <?php echo $row["D_der_mdf"] ?>.</h5>
            <h5 class="card-title">Categorie : <?php echo $row["Categorie"] ?>.</h5>
            <h5 class="card-title">Type : <?php echo $row["Type"] ?> .</h5>
            <h5 class="card-title">Adresse : <?php echo $row["Adresse"] ?>.</h5>
            <?php
            $codPost = $row["Code_postal"];
            ?>
            <h5 class="card-title">Ville : <?php echo $row["Ville"] ?>.</h5>
            <p class="card-title mt-3">Description : <?php echo $row["Description"] ?>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#contac<?php echo $row["N_ann"] ?>">Contact <i class="fa-solid fa-phone"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="contac<?php echo $row["N_ann"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Page contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php 
        $select = "SELECT * FROM `client` WHERE `N_cl` = '$row[N_cl]'";
        $result = $db->query($select);

        while($rowcl = $result->fetch()){
            ?>
            <p class="bg-dark text-white p-3"><i class="fa-solid fa-address-card me-3"></i><?php echo $rowcl["Nom"] . " " . $rowcl["Prenom"]?></p>
            <p class="bg-success text-white p-3"><i class="fa-solid fa-phone-volume me-3"></i> 212+ <?php echo  $rowcl["N_tele"]?></p>
            <p class="bg-danger text-white p-3"><i class="fa-solid fa-envelope me-3"></i><?php echo $rowcl["Email"]?></p>
            <p class="bg-warning text-white p-3"><i class="fa-solid fa-envelopes-bulk me-3"></i> <?php echo $codPost?></p>
            <?php
        };
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  data-bs-toggle="modal" data-bs-target="#exam<?php echo $row["N_ann"] ?>"><i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</div>
<?php
    }
?>