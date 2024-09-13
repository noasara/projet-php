<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un film</title>
</head>
<body>
    <h2>Ajout d'un film</h2>
    
    <p>Vous avez la possibilité d'ajouter un film sur le site à l'aide de ce formulaire</p>
    <br>
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
        <label for="image">Affiche du film (importez une image)</label>
            <input type="file" id="image" name="image" accept="image/*" required/></li>

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
    <br>
</body>
</html>

<?php
$servername = "localhost";
$database = "projet-php";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $realisateur = $_POST['realisateur'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $duree = $_POST['duree'];

$sql = "INSERT INTO films (titre, realisateur, date, image, duree) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);

    // Associer les paramètres
    $stmt->bind_param("ssssi", $titre, $realisateur, $date, $image, $duree);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Le film a été ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout du film : " . $stmt->error;
    }
         $stmt->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
