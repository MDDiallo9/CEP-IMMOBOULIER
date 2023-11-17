<?php
require ("./models/Database.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    debug($_POST);
}
require("./views/annonces/add.view.php");
