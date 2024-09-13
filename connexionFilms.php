<?php 

    include "connectBDD.php";
    session_start();

    //if(isset($id)) echo "bdd réussi";

    if(isset($_POST["bout"])){
        $mail = $_POST["mail"];
        $mdpsaisi = $_POST["password"];
        $req = "SELECT * FROM users WHERE email='$mail'";
        $res = mysqli_query($id, $req);
        $ligne = mysqli_fetch_assoc($res);
        
    
        if ($ligne['mdp'] === $mdpsaisi) {
            $_SESSION["mail"] = $mail;
            $_SESSION["pseudo"] = $ligne["pseudo"];
            $_SESSION["niveau"] = $ligne["niveau"];
            $_SESSION["id"]=$ligne["id"];
            //header("location:accueil.php");
            
        } else {
            $erreur =  "<h4> Mot de passe incorrect ! </h4>";
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="" method="post">
       <p id="mail">E-mail :</p><input type="text" name="mail" placeholder="Ton mail : " required>
       <p>Mot de passe :</p><input type="password" name="password" placeholder="Ton mot de passe :" required>
       <?php if(isset($erreur)) echo $erreur;?>
       <input id="connexion" type="submit" value="Connexion" name="bout">
    </form>
</body>
</html>