<?php
session_start();

// Configuration de la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "toursmorocco";

// Créer la connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Définir le jeu de caractères
$conn->set_charset("utf8mb4");
?>