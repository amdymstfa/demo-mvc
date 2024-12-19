<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <a href="index.php?action=add">Ajouter un Produit</a>
    <ul>
        <?php foreach ($products as $index => $product): ?>
            <li>
                <strong><?php echo htmlspecialchars($product['name']); ?></strong> - 
                <?php echo htmlspecialchars($product['price']); ?> € - 
                <?php echo htmlspecialchars($product['description']); ?>
                <a href="index.php?action=delete&index=<?php echo $index; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
