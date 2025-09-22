<?php
$serveur = 'localhost'; 
$utilisateur = 'root'; 
$motDePasse = ''; 
$baseDeDonnees = "utilisateur"; // Nom de la base de données MySQL

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
} 

// Créer la base de données si elle n'existe pas
$sql = "CREATE DATABASE IF NOT EXISTS $baseDeDonnees";
if ($connexion->query($sql) === TRUE) {
    echo "Base de données créée avec succès.";
} else {
    echo "Erreur lors de la création de la base de données : " . $connexion->error;
}

// Sélectionner la base de données
$connexion->select_db($baseDeDonnees);

// Créer la table utilisateur
$sql = "CREATE TABLE IF NOT EXISTS utilisateur (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    motDePasse VARCHAR(255) NOT NULL
)";

if ($connexion->query($sql) === TRUE) {
    echo "Table utilisateur créée avec succès.";
} else {
    echo "Erreur lors de la création de la table : " . $connexion->error;
}

// Fermer la connexion à la base de données lorsque vous avez fini
$connexion->close();
?>
