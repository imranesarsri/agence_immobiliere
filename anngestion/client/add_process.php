<?php 
    session_start();
    include '../Login/connect.php';
    

if (isset($_POST['submit'])) {
    // $id_client = $_SESSION["N_cl"];
    // $nom = $_SESSION["Nom"];
    $Title = $_POST['Title'];
    $Prix = $_POST['Prix'];
    // $D_pub = $_POST['D_pub'];
    // $D_der_mdf = $_POST['D_der_mdf'];
    $Adresse = $_POST['Adresse'];
    $Description = $_POST['Description'];
    $Code_postal = $_POST['Code_postal'];
    $Ville = $_POST['Ville'];
    $Categorie = $_POST['Categorie'];
    $Type = $_POST['Type'];
    $Email = $_SESSION['Email'];
    // echo $Email;

    // $N_cl = $db->lastInsertId();

    $data = [
        'Ti' => $Title,
        'Pr' => $Prix,
        ':now' => date('Y-m-d'),
        ':now' => date('Y-m-d'),
        'Ad' => $Adresse,
        'De' => $Description,
        'Cod' => $Code_postal,
        'Vi' => $Ville,
        'Ca' => $Categorie,
        'Ty' => $Type,
        // 'cl' => $N_cl,
    ];


    $sql = "INSERT INTO annonce (Title, Prix, D_pub, D_der_mdf, Adresse,`Description`, Code_postal, Ville, Categorie, Type, N_cl)
    VALUES (:Ti, :Pr, :now, :now, :Ad,:De, :Cod, :Vi, :Ca, :Ty,(SELECT N_cl FROM client WHERE `Email` = '$Email'))";

    $stmt= $db->prepare($sql);
    
    $stmt->execute($data);

    $N_ann = $db->lastInsertId();


    $primary= basename($_FILES["Img_type"]["name"]);
    $directory = "uploads/";
    $primary_path = $directory.$primary;

    if(!is_dir($directory)) {
        mkdir($directory);
    }
    //---------*check if the user have his own folder or not *----------------
    //---------*insert the primary image*----------------
    if (move_uploaded_file($_FILES["Img_type"]["tmp_name"], $primary_path)){
        $statement2 = $db->prepare("INSERT INTO `galerie_images` (`Img_url`,`Img_type`,`N_ann`) VALUES ('$primary_path',1,'$N_ann')");
        $statement2->execute();
    }
    //---------*insert the primary image*----------------
    //---------*insert the secondary images*----------------
    for ($i=0;$i<count($_FILES["images"]["name"]);$i++ ){
        $pic_name = basename($_FILES["images"]["name"][$i]);
        $path = $directory.$pic_name;
        move_uploaded_file($_FILES["images"]["tmp_name"][$i], $path);
        $statement = $db->prepare("INSERT INTO `galerie_images` (`Img_url`,`Img_type`,`N_ann`) VALUES ('$path',0,$N_ann)");
        $statement->execute();
    }
    //---------*insert the secondary images*----------------
    header('Location: pageClien.php');
    exit();



       

   
}

