<?php require("partials/header.php"); ?>
<a href="/add">Ajouter une annonce</a>

<section id="duo">
    <?php foreach ($annonces as $annonce) {
    ?>
        <article class="half">
            <h2><?= $annonce["titre"] ?></h2>
            <?php if ($annonce["type"] === 0) { ?>
                <p class="type">Location</p>
            <?php } else { ?>
                <p class="type">Achat</p>
            <?php } ?>
            <div class="big" style='background-image: url("upload/<?= $annonce["image"] ?>");'></div>
            <p><?= $annonce["description"] ?></p>
            <p><?= $annonce["surface"] ?>m² , <?= $annonce["pieces"] ?> pièces </p>
            <p><strong><?= $annonce["prix"] ?> €</strong></p>
            <p class="energie">Energie : <?= $annonce["energie"] ?> Pollution : <?= $annonce["pollution"] ?></p>
            <?php if($annonce["modifie_le"]){?>
                Dernière modification le <?= $annonce["modifie_le"] ?>
                <?php }?>
        </article>
    <?php  }; ?>
</section>

<?php require("partials/footer.php"); ?>