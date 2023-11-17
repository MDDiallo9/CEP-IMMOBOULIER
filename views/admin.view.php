<?php require("partials/header.php"); ?>

<table>
    <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Type/Prix</th>
        <th>Surface</th>
        <th>Informations énergie</th>
        <th>Dates</th>
        <th>Actions</th>
    </tr>
    <?php foreach($annonces as $annonce){?>
        <tr>
            <td><div class="mini"><img src="upload/<?= $annonce["image"] ?>" alt=""></div></td>
            <td><?= $annonce["titre"] ?></td>
            <td><?= substr($annonce["description"],0,30) . "(...)" ?></td>
            <td><?= $annonce["type"] == 0 ? "Location" : "Achat" ?> - <?= $annonce["prix"] ?>€</td>
            <td><?= $annonce["surface"] ?> m²</td>
            <td><span class="energy"><?= $annonce["pollution"] ?></span><span><?= $annonce["energie"] ?></span></td>
            <td>Crée le : <?= substr($annonce["cree_le"],0,10) ?><br><?= $annonce["modifie_le"] ? "Dernière modification : " . substr($annonce["modifie_le"],0,10) : "" ?></td>
            <td>
            <a class="btn" href="/read?id=<?= $annonce["id"] ?>">Détails</a>
            <a class="btn" href="/update?id=<?= $annonce["id"] ?>">Modifier</a>
            <a class="btn" href="/delete?id=<?= $annonce["id"] ?>">Supprimer</a>
            </td>

        </tr>
    <?php }?>

</table>

    <?php require("partials/footer.php"); ?>