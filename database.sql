-- ============================================
-- FlavorHub - Script SQL complet
-- Importer dans phpMyAdmin directement
-- ============================================

CREATE DATABASE IF NOT EXISTS flavohub_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE flavohub_db;

-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS utilisateurs (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    prenom       VARCHAR(100)  NOT NULL,
    nom          VARCHAR(100)  NOT NULL,
    email        VARCHAR(255)  NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255)  NOT NULL,
    created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table des favoris (cœurs)
-- recipe_id correspond aux IDs de RECIPES_DATA dans recipes-data.js
CREATE TABLE IF NOT EXISTS favoris (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    user_id    INT NOT NULL,
    recipe_id  INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_favori (user_id, recipe_id),
    FOREIGN KEY (user_id) REFERENCES utilisateurs(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
