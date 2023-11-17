<?php
require ("./models/Database.php");
$annonces = $db->query("SELECT * FROM annonce ORDER BY cree_le DESC")->fetchAll();
require("./views/admin.view.php");