<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une blockchain</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../index.php">Accueil</a>
                </li>
                <li>
                    <a href="./show_blockchain.php">Afficher une blockchain</a>
                </li>
                <li>
                    <a href="./create_blockchain.php">Créer une blockchain</a>
                </li>
                <li>
                    <a href="./edit_blockchain.php">Editer une blockchain</a>
                </li>
                <li>
                    <a href="./delete_blockchain.php">Supprimer une blockchain</a>
                </li>
            </ul>
        </nav>
    </header>

    <form action="../assets/php/controllers/delete_users.php" method="POST">
        <div>
            <label for="id-delete">Id</label>
            <input type="text" id="id-delete" name="id-delete">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>