<?php
require ("./models/Database.php");
$annonces = $db->query("SELECT image,titre,surface,prix FROM annonce")->fetchAll();

require("./views/photo.view.php");