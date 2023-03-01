<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
 <!-- Modal updte -->
 <div class="modal fade" id="edit<?= $row["N_ann"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" >
            <!-- <input  name="Titlehidden" type="text" readonly class="input w-100"  >  -->
            <input id="Title" name="Title" type="text" class="input w-100" value="<?= $row['Title'] ?>"  placeholder="Title" required > 
            <div id="TitleError"></div>      
            <input id="Prix" name="Prix" type="number" class="input w-100" value="<?= $row['Prix'] ?>" placeholder="Prix" required>
            <div id="PrixError"></div>      
            <input id="Adresse" name="Adresse" type="text" class="input w-100" value="<?= $row['Adresse'] ?>" placeholder="Adresse" required >
            <div id="AdresseError"></div>      
            <input id="Ville" name="Ville" type="text" class="input w-100" value="<?= $row['Ville'] ?>" placeholder="Ville" required >
            <div id="VilleError"></div>      
            <input id="Code_postal" name="Code_postal" type="number" class="input w-100" value="<?= $row['Code_postal'] ?>" placeholder="Code postal" required>
            <input id="Description" name="Description" type="text" class="input w-100" value="<?= $row['Description'] ?>" placeholder="Description" required>
            <div id="Code_postalError"></div>      
            <div class="d-flex gap-5 mt-4">
              <div>
                <label for="">Categorie</label><br>
                <input id="vente" name="Categorie" type="radio" value="vente" <?php if($row['Categorie']=="vente"){ echo "checked";}?>>
                <label for="vente">vente</label><br>
                <input id="location" name="Categorie" type="radio" value="location" <?php if($row['Categorie']=="location"){ echo "checked";}?>>
                <label for="location">location</label><br>
              </div>
              <div class="ms-5 d-flex gap-4">
                <div>
                  <label for="">type</label><br>
                  <input id="appartement" name="Type" type="radio" value="appartement" <?php if($row['Type']=="appartement"){ echo "checked";}?>>
                  <label for="appartement">appartement</label><br>
                  <input id="maison" name="Type" type="radio" value="maison" <?php if($row['Type']=="maison"){ echo "checked";}?>>
                  <label for="maison">maison</label><br>
                  <input id="villa" name="Type" type="radio" value="villa" <?php if($row['Type']=="villa"){ echo "checked";}?>>
                  <label for="villa">villa</label><br>
                </div>
                <div class="mt-4">
                  <input id="bureau" name="Type" type="radio" value="bureau" <?php if($row['Type']=="bureau"){ echo "checked";}?>>
                  <label for="bureau">bureau</label><br>
                  <input name="Type" id="terrain" type="radio" value="terrain" <?php if($row['Type']=="terrain"){ echo "checked";}?>>
                  <label for="terrain">terrain</label><br>
                </div>
              </div>
            </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Image principale</label>
                    
                    <input class="form-control" name="imagePrans" type="file" id="formFile" value="<?= $imgPrans?>">
                    <input type="text" hidden="hidden" name="imagePransLink" value="<?php echo $imgPrans?>"> 
                    <img src="<?= $imgPrans?>" class="rounded-circle" style="width: 70px">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Images secondaires</label><br>
                    <?php
                      $sqlimgsec ="SELECT * FROM `galerie_images` WHERE `N_ann` ='$N_ann' AND `Img_type` = 0";
                      $resultimgsec = $db->query($sqlimgsec);

                      
                      while($rowimgsec = $resultimgsec->fetch()){
                        ?>                    
                    <img src="<?=$rowimgsec['Img_url']?>" class="rounded-circle" style="width: 70px">
                    <?php
                      }
                    ?>
                </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="updateData" value="<?= $row["N_ann"] ?>" class="btn btn-success">Save Edit</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
 </body>
 </html>