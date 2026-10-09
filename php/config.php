<?php
// ============================================================
// Connexion MySQL - auto-creation de la base et des tables
// ============================================================
$host = 'localhost';
$user = 'root';
$pass = '';      // Laissez vide si XAMPP sans mot de passe
$db   = 'flavohub_db';

// Etape 1 : connexion sans base de donnees
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die('Impossible de se connecter a MySQL : ' . mysqli_connect_error());
}

// Etape 2 : creer la base de donnees si elle n existe pas
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS `flavohub_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

// Etape 3 : selectionner la base de donnees
mysqli_select_db($conn, $db);

// Etape 4 : creer les tables si elles n existent pas
mysqli_query($conn, "
    CREATE TABLE IF NOT EXISTS utilisateurs (
        id           INT AUTO_INCREMENT PRIMARY KEY,
        prenom       VARCHAR(100)  NOT NULL,
        nom          VARCHAR(100)  NOT NULL,
        email        VARCHAR(255)  NOT NULL UNIQUE,
        mot_de_passe VARCHAR(255)  NOT NULL,
        created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

mysqli_query($conn, "
    CREATE TABLE IF NOT EXISTS favoris (
        id         INT AUTO_INCREMENT PRIMARY KEY,
        user_id    INT NOT NULL,
        recipe_id  INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        UNIQUE KEY unique_favori (user_id, recipe_id),
        FOREIGN KEY (user_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
");

mysqli_set_charset($conn, 'utf8mb4');
?>
