<?php
// Fonction pour obtenir les informations de contact
function getContactInfo($pdo) {
    $stmt = $pdo->query("SELECT * FROM contact_info LIMIT 1");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
