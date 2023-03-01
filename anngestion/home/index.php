<?php
session_start();

if(isset($_POST['SignOut']) || isset($_POST['btnSignOutModal']) || isset($_POST['btnDeleteAcount'])){
    session_unset();
    header("Location:../home/index.php");
};
include("../Login/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief-15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/165265fe22.css" crossorigin="anonymous">
</head>
<body>
    <style>
        <?php include 'style.css' ?>

    </style>
    <!-- ================================= Header (100vh) ================================= -->
<!-- =========== Modal Signe out=========== -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">sign out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Your are sure to sign out ?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="POST">
                    <button type="submit" name="SignOut" class="btn btn-primary">Sign out</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- =========== =========== -->
<!-- ========================================================== -->
 <header class="p-3 bg-white">
        <div class="row">
            <div class="col-3">
                <a href="index.php">
                    <img style="border-radius:0%" src="../image/logo.png" alt="logo" class="w-50">
                </a>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <form method="POST">
                        <div class="input-group">
                            <input type="search" name="search" id="search" class="form-control" placeholder="Search">
                            <select class="border" name="filter_search">
                                <option>All</option>
                                <option>City</option>
                                <option>Category</option>
                                <option>Type</option>
                                <option>Price</option>
                            </select>
                            <button type="submit" class="btn searchbtn border" name="btnSerch" title="Search"><i class="fas fa-search filtersearch"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-end gap-2">
            <?php
            if(isset($_SESSION['Email'])){
            ?>
            <div class="d-flex">
                <div id="imgOpenPageClient"class="profil d-flex">
                    <img src="../image/profil.jpg" alt="img profil">
                </div>
                    <div class="dropdown">
                        <div class="select" id="selected">
                            <span class="selected"> <i class="fa-solid fa-caret-down " id="icon"></i></span>
                            <div class="caret"></div>
                        </div>
                        <ul class="menu" id="menu">
                            <li>
                                <div class="d-flex gap-5" id="divSubmitPageClien">
                                    <div  class="divImgProflModal pt-2">
                                        <img src="../image/profil.jpg" alt="">
                                    </div>
                                    <div>
                                        <?php
                                            include("../client/selectDataProfail.php") 
                                        ?>
                                        <p>Welcome : </p>
                                        <p><?php echo $NomProfil . " " . $PrenomProfil ?></p>
                                        <p><?php echo $_SESSION['Email']?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div id="divSubmitPage">
                                    <p>Account setting</p>
                                    <p>Your annonces</p>
                                    <p>Add an annonce</p>
                                </div>
                            </li>
                            <li class="">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign out</button>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <?php
            }else{
            ?>
                <form action="">
                    <button class="btn signin"><a href="../Login/index1.php"> SIGN IN</a></button>
                    <button id="btnsubSignUp" class="btn signUp"><a href="../Login/index1.php">SIGN UP</a></button>
                </form>
            <?php
            }
            ?>
            </div>
        </div>
    </header>
<!-- ========================================================== -->
    <div id="image">
        <h1 class="h1 text-center container pt-5 display-1 fw-normal">Buy, rent and sell your properties easily with us!</h1>
    </div>
    <div class="down-arrow"></div>
    <!-- ================================= Cards container ================================= -->
    <div style="background-color:#0d6efd" class="p-4">
            <form method="POST" class="w-25">
                <div class="input-group">
                    <select class="form-select" name="sortSelectbyAsc">
                        <option value="Title">Sort by Title</option>
                        <option value="D_pub">Publication date</option>
                        <option value="Prix">Price</option>
                    </select>
                    <button class="btn border" type="submit" name="btnSort" title="Sort"><i class="text-white fa-solid fa-arrow-down-short-wide"></i></button>
                </div>
            </form>
        </div>
        <h2 class="text-center m-5">Les Annonces</h2>
        
        <section class="container text-center">

    <?php
        include("selectData.php")
    ?>

</section>
    <!-- ================================= Footer ================================= -->

    <footer class="text-center text-black bg-white">

        <div class="text-center text-dark p-3 footertext">
            Contact us!
        </div>

        <div class="container pt-3">
            <section class="mb-3">
                <i class="fa-solid fa-envelope icons"></i>
                <i class="fa-brands fa-instagram icons"></i>
                <i class="fa-brands fa-twitter icons"></i>
                <i class="fa-brands fa-facebook icons"></i>
            </section>
        </div>

        <div class="text-center text-dark p-3 footertext">
            © All right reserved. Solicode Tanger 2022/2023.
        </div>

    </footer>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>