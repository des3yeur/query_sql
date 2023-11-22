<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
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
                    <a href="./show_token_rust.php">Afficher token rust</a>
                </li>
                <li>
                    <a href="./create_token_rust.php">Créer token rust</a>
                </li>
                <li>
                    <a href="./edit_token_rust.php">Editer token rust</a>
                </li>
                <li>
                    <a href="./delete_token_rust.php">Supprimer token rust</a>
                </li>
            </ul>
        </nav>
    </header>

    <form action="../assets/php/controllers/blockchain_rust/delete_users.php" method="POST">
        <div>
            <label for="id-delete">Id</label>
            <input type="text" id="id-delete" name="id-delete">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>