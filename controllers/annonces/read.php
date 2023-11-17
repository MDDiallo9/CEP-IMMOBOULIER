<?php
require 'models/Database.php';

$id = $_GET['id'];

$annonce = $db->prepare("SELECT * FROM annonce where id = :id");
$annonce->bindValue(":id",$id);
$annonce->execute();
$annonce = $annonce->fetch();

debug($annonce);

require("./views/annonces/read.view.php");
