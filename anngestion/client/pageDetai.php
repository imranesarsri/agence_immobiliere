<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<div class="modal fade" id="exam<?php echo $row["N_ann"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <img  style="width: 300px;height: auto;border-radius: 0%;"  src="<?php echo $imgPrans ?>" class="card-img-top" alt="">
          </div>
          <h5 class="mt-3 mb-3">Deutres image :</h5>
          <div class="d-flex gap-3 flex-wrap mt-3 mb-3 ms-5 container">

            <?php
                  $sqlimgsec ="SELECT * FROM `galerie_images` WHERE `N_ann` ='$N_ann' AND `Img_type` = 0";
                  $resultimgsec = $db->query($sqlimgsec);

                  while($rowimgsec = $resultimgsec->fetch()){
            ?>
          <img style="border-radius:0% ; white:160px ; height:auto" src="<?php echo $rowimgsec['Img_url'] ?>" alt="">
          <?php
                  }
          ?>
          </div>
        </div>

      <h5 class="card-title">Title : <?php echo $row["Title"] ?>.</h5>
      <h5 class="card-title">Prix : <?php echo $row["Prix"] ?>DH . </h5>
            <h5 class="card-title"> Date de publication : <?php echo $row["D_pub"] ?>.</h5>
            <h5 class="card-title"> Date derner mdfication : <?php echo $row["D_der_mdf"] ?>.</h5>
            <h5 class="card-title"> Categorie : <?php echo $row["Categorie"] ?>.</h5>
            <h5 class="card-title"> Type : <?php echo $row["Type"] ?> .</h5>
            <h5 class="card-title"> Adresse : <?php echo $row["Adresse"] ?>.</h5>
            <h5 class="card-title"> Code postal : <?php echo $row["Code_postal"] ?>.</h5>
            <h5 class="card-title"> Ville : <?php echo $row["Ville"] ?>.</h5>
            <h6 class="card-title mt-3"> Description : <?php echo $row["Description"] ?>.</h6>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>
