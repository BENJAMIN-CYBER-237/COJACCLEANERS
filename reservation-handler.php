<?php include 'header.php'; ?>
<h2>Réservez un service</h2>
<form action="reservation_handler.php" method="post">
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Téléphone:</label>
    <input type="text" id="phone" name="phone" required>
    
    <label for="service">Service:</label>
    <select id="service" name="service" required>
        <option value="lavage">Lavage et séchage</option>
        <option value="repassage">Repassage</option>
        <option value="nettoyage_sec">Nettoyage à sec</option>
    </select>
    
    <label for="details">Détails supplémentaires:</label>
    <textarea id="details" name="details"></textarea>
    
    <button type="submit">Réserver</button>
</form>
<?php include 'footer.php'; ?>
