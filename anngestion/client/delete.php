<!-- Modal -->
<div class="modal fade" id="delete<?php echo $row["N_ann"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete annonce </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this item ?
    </div>
      <div class="modal-footer">
        <form action="" method="POST">
            <button id="btnDelete" type="submit" name="deletebtnModal" value="<?php echo $row["N_ann"]?>" class="btn btn-danger ps-3 pe-3 p-2" data-bs-toggle="modal" data-bs-target="#spinit<?php echo $row["N_ann"]?>"><i class="fa-solid fa-trash-can"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>



<?php

if(isset($_POST["deletebtnModal"])){
  $id = $_POST["deletebtnModal"] ;
  // echo $id ;
    $select2 = "DELETE FROM `galerie_images` WHERE `N_ann`= '$id' ";
    $result2 = $db->query($select2);
    $select = "DELETE FROM `annonce` WHERE `N_ann`= '$id'";
    $result = $db->query($select);



  }



?>

