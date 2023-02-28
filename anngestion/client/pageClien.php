<?php 
  session_start();
  include("../Login/connect.php");
  include ('add_modal.php');
  include ('delete.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylePage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/165265fe22.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ad59909c53.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home/index.php"><img class="ms-2" src="../image/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end me-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

      <?php
          if(isset($_SESSION['Email'])){
      ?>
<section class="part-profil" >
    <div class="profil" id="profil">
        <img src="../image/profill.jpg" alt="">
      <i type="button" data-bs-toggle="modal" data-bs-target="#modalProfil" class="fa-solid fa-wand-magic-sparkles iconIdit" id="iconIdit"></i>














      <?php include("modalProfil.php") ?>
    </div>
    <div class="text-center mt-3 mb-3" style="color:white">
    <?php include("selectDataProfail.php") ?>
      <p><?php echo  $NomProfil . " " . $PrenomProfil ?></p>
      <p><?php echo $_SESSION['Email']?></p>
    </div>
        <?php
            }
        ?>
</section>
<section class="part-add">
  
  <div class="row mt-3 d-flex justify-content-evenly m-auto">

    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="col-3 btn border text-white mb-3" >Add</button>

    <div class="col-3">
      <div class="input-group" >
          <form method="POST">
              <div class="input-group">
                  <input type="search" name="searchResult" id="search" class="form-control" placeholder="Search">
                  <select class="border" name="filter_search">
                      <option value="All">All</option>
                      <option value="Ville" >City</option>
                      <option value="Categorie">Category</option>
                      <option value="Type">Type</option>
                      <option value="Prix">Price</option>
                  </select>
                  <button type="submit" name="btnSerch" class="btn searchbtn border" title="Search"><i class=" text-white fas fa-search filtersearch"></i></button>
              </div>
          </form>
      </div>
  </div>

  <div class="col-3">
    <form method="POST">
      <div class="input-group">
      <select class="form-select" name="sortSelectbyAsc">
          <option value="Title">Sort by Title</option>
          <option value="D_pub">Publication date</option>
          <option value="Prix">Price</option>
      </select>
      <button class="btn border" name="btnSort" type="submit" title="Sort"><i class="text-white fa-solid fa-arrow-down-short-wide"></i></button>
      </div>
  </form>
  </div>
  </div>
    
</section>
<section>
  
  
  
  <h2 class="text-center mt-5">My Annonce</h2>
  <div class="container p-5 text-center">
    
    
    <?php
include("selectData.php");
?>

</div>
</section>






<script src="https://kit.fontawesome.com/ad59909c53.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="main.js"></script>
<!-- <script src="valiUpdate.js"></script> -->
<script src="../Login/validation2.js"></script>
</body>
</html>