<?php require("views/partials/header.php"); ?>
<article>
        <h2><?= $annonce["titre"] ?></h2>
        <?php if ($annonce["type"] === 0) { ?>
            <p class="type">Location</p>
        <?php } else { ?>
            <p class="type">Achat</p>
        <?php } ?>
        <div><img src="upload/<?= $annonce["image"] ?>" alt=""></div>
        <p><?= $annonce["description"] ?></p>
        <p class="surface"><?= $annonce["surface"] ?>m² , <?= $annonce["pieces"] ?> pièces </p>
        <p><strong><?= $annonce["prix"] ?> €</strong></p>
        <p class="energie">Energie : <?= $annonce["energie"] ?> Pollution : <?= $annonce["pollution"] ?></p>
        
    </article>

<?php require("views/partials/footer.php"); ?>
