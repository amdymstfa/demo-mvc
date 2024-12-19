<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Produit</title>
</head>
<body>
    <h1>Ajouter un Produit</h1>
    <form action="index.php?action=add" method="POST">
        <label for="name">Nom :</label>
        <input type="text" name="name" required><br>

        <label for="price">Prix :</label>
        <input type="number" name="price" step="0.01" required><br>

        <label for="description">Description :</label>
        <textarea name="description" required></textarea><br>

        <button type="submit">Ajouter</button>
    </form>
    <a href="index.php">Retour à la liste</a>
</body>
</html>
