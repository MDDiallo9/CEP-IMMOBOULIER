<?php require("partials/header.php"); ?>


<?php foreach ($annonces as $annonce) {
?>
    <article>
        <h2><?= $annonce["titre"] ?></h2>
        <?php if ($annonce["type"] === 0) { ?>
            <p class="type">Location</p>
        <?php } else { ?>
            <p class="type">Achat</p>
        <?php } ?>
        <div><img src="" alt=""></div>
        <p><?= $annonce["description"] ?></p>
        <p class="surface"><?= $annonce["surface"] ?>m² , <?= $annonce["pieces"] ?> pièces </p>
        <p><strong><?= $annonce["prix"] ?> €</strong></p>
        <p class="energie">Energie : <?= $annonce["energie"] ?> Pollution : <?= $annonce["pollution"] ?></p>
    </article>
<?php  }; ?>

<?php require("partials/footer.php"); ?>