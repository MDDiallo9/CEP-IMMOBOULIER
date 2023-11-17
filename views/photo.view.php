<?php require("partials/header.php"); ?>


<section class="grid">
    <?php foreach ($annonces as $annonce) {
    ?>
        <article class="photo">
            <div class="big"><img src="upload/<?= $annonce["image"] ?>" alt=""></div>
            <div class="description">
                <h3><?= $annonce["titre"] ?></h3>
                <div>
                    <p class="surface"><?= $annonce["surface"] ?> m²</p>
                    <p class="prix"><?= number_format($annonce["prix"], 2, ',', ' ') ?> €</p>
                </div>
            </div>
        </article>
    <?php  }; ?>
</section>


<?php require("partials/footer.php"); ?>
