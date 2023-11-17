<?php
require ("./models/Database.php");
$annonces = $db->query("SELECT * FROM annonce ORDER BY cree_le DESC")->fetchAll();

debug($annonces);
require("./views/home.view.php");