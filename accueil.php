<?php

    include "connectBDD.php";
    include "classFilms.php";
    session_start();

    $lesFilms = new LesFilms();

    $req="select * from films";
    $res = mysqli_query($id, $req);
    
    while($ligne = mysqli_fetch_assoc($res)) { 
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
    <title>Accueil</title>
</head>
<body>
    <h1>La liste des Films</h1>
    <ul>
            <?php foreach ($lesFilms->returnLesFilms() as $film) { ?>
            <li>
                Titre : <?php echo $film->getTitre() ?> <br>
                Réalisateur : <?php echo $film->getRealisateur() ?> <br>
                Année de sortie : <?php echo $film->getDate() ?> <br>
                Durée du film : <?php echo $film->getDuree() ?> minutes<br>
                <img src="imgFilm/<?=$film->getImg()?>" alt="">
                <?php } ?>
            </li>
    </ul>
    
</body>
</html>