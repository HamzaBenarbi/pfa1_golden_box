<?php
// Inclure le fichier de connexion à la base de données
include 'database.php';

// Récupérer les données du formulaire d'inscription
$nom = $_POST['nom'];
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

// Ajouter l'utilisateur à la table utilisateur
$sql = "INSERT INTO utilisateur (nom, email, motDePasse) VALUES ('$nom', '$email', '$motDePasse')";

if ($connexion->query($sql) === TRUE) {
    echo "Utilisateur ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'utilisateur : " . $connexion->error;
}

// Fermer la connexion à la base de données lorsque vous avez fini
$connexion->close();
?>
