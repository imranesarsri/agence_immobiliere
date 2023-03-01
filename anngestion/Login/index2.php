<?php
include("connect.php");
include("createTable.php");
include("insertLoginUp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&family=Lato:wght@300;400&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index1.php"><img class="ms-5" src="../image/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-3" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- ********* -->

    <section>
        <div class="partLogin">
            <div class="partLoginflex">
                <div class="sdectLogin d-flix gap-5">
                    <a href="index1.php">Sign In</a>
                    <a  class="active" href="index2.php">Sign Up</a>
                </div>
            </div>
                <div class="partform">
                    <h2>SIGN IN</h2>
                    <p class="parg mb-5">Sign in to continue to our application</p>
                    <form action="" method="POST">
                        <input class="w-100" id="inpPrenom" type="text" value="<?php echo $valuePrenom?>" name="inpPrenom" placeholder="Prénom">
                        <div id="PrenomError"></div>
                        <input class="w-100" id="inpNom" type="text" value="<?php echo $valueNom?>" name="inpNom" placeholder="Nom">
                        <div id="NomError"></div>
                        <input class="w-100" style="<?php echo $bordEmail ?>" value="<?php echo $valueEmail?>" id="inpEmail" type="Email" name="inpEmail" placeholder="Email">
                        <div id="resultMessagEmail" style="color:red;"><?php echo $resultMessagEmail?></div>
                        <div id="EmailError"></div>
                        <input class="w-100" id="inpPassword" type="password" value="<?php echo $valuePassword?>" name="inpPassword" placeholder="Password">
                        <div class="position-relative">
                            <div class="position-absolute bottom-0 end-0" style="">
                                <i class="fa-solid fa-eye-slash icon1 " id="icon1" style=" display: none;"></i>
                            </div>
                        </div>
                        <div id="PasswordError"></div>
                        <input class="w-100" id="inpEnterPassw" name="inpEnterPassw" type="password" value="<?php echo $valueEnterPassw?>" placeholder="Enter the password again">
                        <div class="position-relative">
                        <div class="position-absolute bottom-0 end-0" style="">
                            <i class="fa-solid fa-eye-slash icon2 " id="icon2" style=" display: none;"></i>
                        </div>
                        </div>
                        <div id="EnterPasswordError"></div>
                        <input class="w-100" id="inpNumber" type="number" value="<?php echo $valueinpNumber?>" name="inpNumber" placeholder="Phone number">
                        <div id="NumberError"></div>
                        <button type="sbmit" class="w-100 mb-5 pt-2 pb-2" name="subBtSignUp" id="subBtSignUp">Sign In</button>
                    </form>
                </div>
        </div>
        <div class="partColor">
            <div class="bgcolor1">
                <div class="bgcolor2">
                    <img class="partColorImg" src="../image/7ec70d2eeb224de2f13815b018b213de.png" alt="">
                </div>
            </div>
        </div>
    </section>
<script src="validation2.js"></script>
<script src="https://kit.fontawesome.com/66fa8a420d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>