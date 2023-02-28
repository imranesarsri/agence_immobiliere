<?php
// create a table "annonce" inside the database "demo"


include("connect.php");





try{

    $sql ="CREATE TABLE IF NOT EXISTS client(
        N_cl INT(11) AUTO_INCREMENT PRIMARY KEY,
        Nom VARCHAR(50) NOT NULL,
        Prenom VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        Mot_pas VARCHAR(50) NOT NULL,
        N_tele INT(11) NOT NULL
    )";
    $db->exec($sql);


    $sql ="CREATE TABLE IF NOT EXISTS annonce(
        N_ann INT(11) AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(50) NOT NULL,
        Prix INT(11) NOT NULL,
        D_pub DATE NOT NULL,
        D_der_mdf DATE NOT NULL,
        Categorie VARCHAR(50) NOT NULL,
        `Type` VARCHAR(50) NOT NULL,
        Adresse VARCHAR(50) NOT NULL,
        `Description` VARCHAR(50) NOT NULL,
        Code_postal VARCHAR(50) NOT NULL,
        Ville VARCHAR(50) NOT NULL,
        N_cl INT NOT NULL,
        FOREIGN KEY(N_cl) REFERENCES client(N_cl)
    )";
    $db->exec($sql);



    $sql ="CREATE TABLE IF NOT EXISTS galerie_images(
        N_img INT(11) AUTO_INCREMENT PRIMARY KEY,
        Img_url VARCHAR(50) NOT NULL,
        Img_type VARCHAR(50) NOT NULL,
        N_ann INT NOT NULL,
        FOREIGN KEY(N_ann) REFERENCES annonce(N_ann)
    )";
    $db->exec($sql);

} catch (PDOException $e) {
    die("error : not create table" . $e->getMessage());
}








// CREATE TABLE IF NOT EXISTS client(
//     N_cl INT(11) AUTO_INCREMENT PRIMARY KEY,
//     Nom VARCHAR(50) NOT NULL,
//     Prenom VARCHAR(50) NOT NULL,
//     Email VARCHAR(50) NOT NULL,
//     Mot_pas VARCHAR(50) NOT NULL,
//     N_tele INT(11) NOT NULL
// );


// CREATE TABLE IF NOT EXISTS annonce(
//     N_ann INT(11) AUTO_INCREMENT PRIMARY KEY,
//     Title VARCHAR(50) NOT NULL,
//     Prix INT(11) NOT NULL,
//     D_pub DATE NOT NULL,
//     D_der_mdf DATE NOT NULL,
//     Categorie VARCHAR(50) NOT NULL,
//     Type VARCHAR(50) NOT NULL,
//     Adresse VARCHAR(50) NOT NULL,
//     Code_postal VARCHAR(50) NOT NULL,
//     Ville VARCHAR(50) NOT NULL,
//     N_cl INT NOT NULL,
//     FOREIGN KEY(N_cl) REFERENCES client(N_cl)
// );



// CREATE TABLE IF NOT EXISTS galerie_images(
//     N_img INT(11) AUTO_INCREMENT PRIMARY KEY,
//     Img_url VARCHAR(50) NOT NULL,
//     Img_type VARCHAR(50) NOT NULL,
//     N_ann INT NOT NULL,
//     FOREIGN KEY(N_ann) REFERENCES annonce(N_ann)
// );

