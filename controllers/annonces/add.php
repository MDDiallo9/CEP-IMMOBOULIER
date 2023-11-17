<?php
require ("./models/Database.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    debug($_POST);
    debug($_FILES);
    $errors = [];

    $titre = trim(filter_var($_POST["titre"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $type = trim(filter_var($_POST["type"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $description = trim(filter_var($_POST["description"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $prix = trim(filter_var($_POST["prix"],FILTER_SANITIZE_NUMBER_INT));
    $surface = trim(filter_var($_POST["surface"],FILTER_SANITIZE_NUMBER_INT));
    $pieces = trim(filter_var($_POST["pieces"],FILTER_SANITIZE_NUMBER_INT));
    $pollution = trim(filter_var($_POST["pollution"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $energie = trim(filter_var($_POST["energie"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $image = $_FILES["image"]["name"];


    if ($type === ""){
        $errors[] = "Veuillez entrer un type pour votre bien";
    }
    if ($pieces === ""){
        $errors[] = "Veuillez entrer le nombre de pièces du bien";
    }

    if (empty($errors)){
        $nouvelleAnnonce = $db->prepare("INSERT INTO annonce (titre,type,description,prix,surface,pieces,pollution,energie,image) VALUES ( :titre, :type, :description, :prix, :surface, :pieces, :pollution, :energie, :image)");

        $nouvelleAnnonce->bindValue(":titre",$titre,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":type",$type,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":description",$description,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":prix",$prix,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":surface",$surface,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":pieces",$pieces,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":pollution",$pollution,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":energie",$energie,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":image",$image,PDO::PARAM_STR);

        $nouvelleAnnonce->execute();
        // Pour l'upload
        $uploaddir = "upload/";
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

        if($lastInsertId){
            header("Location: /");
        }

    }


}
require("./views/annonces/add.view.php");
