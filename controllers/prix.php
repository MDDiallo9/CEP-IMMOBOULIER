<?php
require ("./models/Database.php");
$annonces = $db->query("SELECT * FROM annonce ORDER BY prix DESC")->fetchAll();

require("./views/prix.view.php");