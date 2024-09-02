<?php
// Configuration de la base de données
$host = 'localhost';
$db = 'bd.site';
$user = 'root';
$pass = 'cojac237';

// Créer une connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
