
<?php include("selectDataProfail.php"); ?>
<?php include("modalProfilscript.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



<!-- Modal profil -->
<div class="modal fade" id="modalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account management</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="partform">
                    <form action="" method="POST">

                        <div class="havermodalprofil">
                          <button id="Upnom" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updata"><i  class="fa-solid fa-pen-to-square"></i></button>
                          <label for="Upnom" class="ms-3">Update the nom and prenom and phone number</label>
                        </div>
                        <hr>
                        <div class="">
                            <div class="mt-3 mb-3 havermodalprofil">
                              <button id="signOut" type="button" data-bs-toggle="modal" data-bs-target="#SignOutModal" class="btn btn-success"><i class="fa-solid fa-right-from-bracket"></i></button>
                              <label for="signOut" class="ms-3">Sign out of the account.</label>
                            </div>
                            <hr>
                            <div class="havermodalprofil">
                              <button id="Deleteaccount" type="button" data-bs-toggle="modal" data-bs-target="#deleteconnte" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                              <label for="Deleteaccount" class="ms-3">Delete account.</label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- --------------------------------------------- -->

<!-- Modal Update Name Phone number -->
<div class="modal fade" id="updata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Update</h5>
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-arrow-right"  class="btn btn-secondary" data-bs-dismiss="modal"></i></h5>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
        <div class=" ms-5 container">


        <div class="mt-3">
          <label>new Prénom</label><br>
          <input class="w-75 " id="inpPrenom" type="text" value="<?php echo $PrenomProfil?>" name="inpPrenom" required placeholder="Prénom"><br>
        </div>

          <div class="mt-3">
          <label>new Nom</label><br>
          <input class="w-75 " id="inpNom" type="text" value="<?php echo $NomProfil?>" name="inpNom" required placeholder="Nom"><br>
          </div>

          <div class="mt-3">
          <label>new Phone number</label><br>
          <input class="w-75 mb-3 "  id="inpNumber" type="number" value="0<?php echo $N_teleProfil?>" required name="inpNumber" placeholder="Phone number">
          </div>
            <button type="sbmit" style="background-image:linear-gradient(to bottom , #15AAD9 , #0043be); color:white;border:none" class=" w-75 pt-2 pb-2 btnUpdateDataProfil" name="subupdate" id="subUpdataProfil">Update</button>
        </div>
        </form>
    </div>
    <div class="modal-footer">
    </div>
  </div>
  </div>
</div>

<!-- --------------------------------------------- -->

<!-- sign out -->
<div class="modal fade" id="SignOutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Update email and password</h5>
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-arrow-right"  class="btn btn-secondary" data-bs-dismiss="modal"></i></h5>
      </div>
      <div class="modal-body">
      Your are sure to sign out ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="POST">
            <button type="submit" id="btsSignOut" name="btnSignOutModal" class="btn btn-success"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- --------------------------------------------- -->

<!-- Delete account -->
<div class="modal fade" id="deleteconnte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update email and password</h5>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-arrow-right"  class="btn btn-secondary" data-bs-dismiss="modal"></i></h5>
            </div>
            <div class="modal-body">
            Your are sure to Delete account ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="POST">
                    <button type="submit" id="btnDeleteAcounts" name="btnDeleteAcount" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- --------------------------------------------- -->
</body>
</html>