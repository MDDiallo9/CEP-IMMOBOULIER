<?php require("views/partials/header.php"); ?>
<h2>Modifier une annonce</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" value="<?= isset($_POST['titre']) ? $_POST['titre'] : $annonceUpdate["titre"] ?>">
    </div>
    <div>
        <label for="type">Type :</label>
        <select name="type" id="type">
            <option value="">Selectionnez le type de votre bien :</option>
            <!-- <option value="0">Location</option>
            <option value="1">Achat</option> -->
            <?php
            for ($i = 0; $i < 2; $i++) { ?>
                <?php if ($i == $annonceUpdate["type"]) { ?>
                    <option value="<?= $i ?>" selected> <?= $annonceUpdate["type"] == 0 ? "Location" : "Achat" ?></option>
                <?php } else { ?>
                    <option value="<?= $i ?>"><?= $annonceUpdate["type"] == 0 ? "Location" : "Achat" ?></option>
                <?php } ?>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="prix">Entrez un prix :</label>
        <input type="number" name="prix" value="<?= $annonceUpdate["prix"] ?>">
    </div>
    <div>
        <label for="description">Description :</label>
        <input type="text" id="description" name="description" value="<?= isset($_POST['description']) ? $_POST['description'] : $annonceUpdate["description"]  ?>">
    </div>
    <div>
        <label for="surface">Surface :</label>
        <input type="number" id="surface" name="surface" value="<?= isset($_POST['surface']) ? $_POST['surface'] : $annonceUpdate["surface"] ?>">m²
    </div>
    <div>
        <label for="pieces">Pieces :</label>
        <select name="pieces" id="pieces">
            <option value="">Selectionnez le nombre de pièces</option>
            <?php
            for ($i = 0; $i < 5; $i++) { ?>
                <?php if ($i == $annonceUpdate["pieces"]) { ?>
                    <option value="<?= $i ?>" selected><?= $i ?></option>
                <?php } else { ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php } ?>

            <?php } ?>
            <!-- <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option> -->
        </select>
    </div>
    <div>
        <label for="image">Uploadez une image du bien :</label>
        <input type="file" name="image" id="image-upload">
    </div>
    <div>
        <label for="pollution">Pollution :</label>
        <label for="A">A
            <input type="radio" name="pollution" id="A" value="A">
        </label>
        <label for="B">B
            <input type="radio" name="pollution" id="B" value="B">
        </label>
        <label for="C">C
            <input type="radio" name="pollution" id="C" value="C">
        </label>
        <label for="D">D
            <input type="radio" name="pollution" id="D" value="D">
        </label>
        <label for="E">E
            <input type="radio" name="pollution" id="E" value="E">
        </label>
        <label for="F">F
            <input type="radio" name="pollution" id="F" value="F">
        </label>
        <label for="G">G
            <input type="radio" name="pollution" id="G" value="G">
        </label>
    </div>
    <div>
        <label for="energie">Energie :</label>
        <label for="A">A
            <input type="radio" name="energie" id="A" value="A">
        </label>
        <label for="B">B
            <input type="radio" name="energie" id="B" value="B">
        </label>
        <label for="C">C
            <input type="radio" name="energie" id="C" value="C">
        </label>
        <label for="D">D
            <input type="radio" name="energie" id="D" value="D">
        </label>
        <label for="E">E
            <input type="radio" name="energie" id="E" value="E">
        </label>
        <label for="F">F
            <input type="radio" name="energie" id="F" value="F">
        </label>
        <label for="G">G
            <input type="radio" name="energie" id="G" value="G">
        </label>
    </div>
    <div>
        <input type="submit" value="Ajouter">
    </div>
</form>
<?php require("views/partials/footer.php"); ?>