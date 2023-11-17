<?php
require 'models/Database.php';

$id = $_GET['id'];

$annonceUpdate = $db->prepare("SELECT * FROM annonce where id = :id");
$annonceUpdate->bindValue(":id",$id);
$annonceUpdate->execute();
$annonceUpdate = $annonceUpdate->fetch();

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

    $date = date('Y-m-d H:i:s');

    if (empty($errors)){
        $nouvelleAnnonce = $db->prepare("UPDATE annonce SET titre = :titre,type = :type,description = :description,prix = :prix,surface = :surface,pieces = :pieces,pollution = :pollution,energie = :energie,image = :image,modifie_le = :modifie_le WHERE id = :id");

        $nouvelleAnnonce->bindValue(":titre",$titre,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":type",$type,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":description",$description,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":prix",$prix,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":surface",$surface,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":pieces",$pieces,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":pollution",$pollution,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":energie",$energie,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":image",$image,PDO::PARAM_STR);
        $nouvelleAnnonce->bindValue(":id",$id,PDO::PARAM_INT);
        $nouvelleAnnonce->bindValue(":modifie_le",$date,PDO::PARAM_STR);


        


        $nouvelleAnnonce->execute();
        // Pour l'upload
        $uploaddir = "upload/";
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

        /* if($lastInsertId){
            header("Location: /");
        } */

    }
}
debug($annonceUpdate);
require("./views/annonces/update.view.php");
