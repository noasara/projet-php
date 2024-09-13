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
        <input type="text" id="realisateur" name="realisateur" required/></li>
        
        <br>

        <li>
        <label for="date">Année de sortie</label>
        <input type="int" id="date" name="date" required/></li>

        <br>

        <li>
        <label for="img">Affiche du film (importez une image)</label>
            <input type="file" id="img" name="img" accept="img/*" required/></li>

        <br>

        <li>
        <label for="duree">Durée du film (en minutes)</label>
        <input type="int" id="duree" name="duree" required/></li>
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
}else echo"Connexion réussie";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $realisateur = $_POST['realisateur'];
    $date = $_POST['date_sortie'];
    $img = $_FILES['image']['name'];
    $duree = $_POST['duree'];

    $sql = "SELECT * FROM films WHERE titre = ? AND date_sortie = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $titre, $date);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Le film existe déjà
        echo "Le film existe déjà dans la base de données.";
    } else {
        //Le film n'existe pas, on peut donc l'insérer dans la bdd
$insert_sql = "INSERT INTO films (titre, realisateur, date_sortie, img, duree) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($insert_sql);

    // Associer les paramètres
    $stmt->bind_param("ssisi", $titre, $realisateur, $date_sortie, $img, $duree);

    // Exécuter la requête
    if ($stmt->execute()) {
        echo "Le film a été ajouté avec succès !";
    } else {
        echo "Erreur lors de l'ajout du film : " . $stmt->error;
    }}
         $stmt->close();
         $insert_sql->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
