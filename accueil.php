<?php

include "connectBDD.php";
include "classFilms.php";
session_start();

$lesFilms = new LesFilms();

$req = "select * from films";
$res = mysqli_query($id, $req);

while ($ligne = mysqli_fetch_assoc($res)) {
    $unFilm = new Film($ligne['id'], $ligne['titre'], $ligne['realisateur'], $ligne['date'], $ligne['img'], $ligne['duree']);
    $lesFilms->ajouterListFilm($unFilm);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="accueil.css" rel="stylesheet" type="text/css" />
    <title>Accueil</title>
</head>

<body>
    <h2>La Liste des Films</h2>

    <!-- <ul>
            <?php
            //var_dump($lesFilms);
            foreach ($lesFilms->returnLesFilms() as $film) { //echo "reussi"; ?>
            <li>
                Titre : <?php echo $film->getTitre() ?> <br>
                Réalisateur : <?php echo $film->getRealisateur() ?> <br>
                Année de sortie : <?php echo $film->getDate() ?> <br>
                Durée du film : <?php echo $film->getDuree() ?> minutes<br>
                <img src="imgFilm/<?= $film->getImg() ?>" alt="">
                <?php } ?>
            </li>
    </ul> -->


    <table>
        <tr>
            <th>Affiche</th>
            <th>Titre</th>
            <th>Réalisateur</th>
            <th>Année de sortie</th>
            <th>Durée du film</th>
        </tr>

        <?php foreach ($lesFilms->returnLesFilms() as $film) { ?>
            <tr>
                <td><img src=<?= $film->getImg() ?> alt='Image'></td>
                <td>
                    <?php echo $film->getTitre() ?>
                </td>
                <td>
                    <?php echo $film->getRealisateur() ?>
                </td>
                <td>
                    <?php echo $film->getDate() ?>
                </td>
                <td>
                    <?php echo $film->getDuree() ?> minutes
                </td>
            <?php } ?>
        </tr>


    </table>

</body>

</html>