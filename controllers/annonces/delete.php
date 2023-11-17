<?php
require 'models/Database.php';

if ( !isset($_GET['id']) || !is_numeric($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$annonce = $db->prepare('DELETE FROM annonce WHERE id = :id');

$annonce->bindParam(':id', $id, PDO::PARAM_INT);

$annonce->execute();

header('Location: /');