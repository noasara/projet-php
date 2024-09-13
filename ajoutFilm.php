<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un film</title>
</head>
<body>
    <h2>Ajout d'un film</h2>
    <ul>
        <li>
        <form action="ajoutFilm.php" method="POST">
        <label for="titre">Titre du film</label>
        <input type="text" id="titre" name="titre"/></li>
        
        <br>

        <li>
        <label for="realisateur">Réalisateur</label>
        <input type="text" id="realisateur" name="realisateur" /></li>
        
        <br>

        <li>
        <label for="date">Date de sortie</label>
        <input type="text" id="date" name="date" /></li>

        <br>

        <li>
        <label for="image">Affiche du film</label>
        <input type="text" id="image" name="image" /></li>

        <br>

        <li>
        <label for="duree">Durée du film</label>
        <input type="int" id="duree" name="duree" /></li>
        </form>
    </ul>

    <br>

    <div class="button">
        <button type="submit">Ajouter le film</button>
    </div>

</body>
</html>

<?php


?>