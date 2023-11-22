<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un utilisateur</title>
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

    <h1>Editer un utilisateur</h1>

    <form action="../assets/php/controllers/blockchain_rust/update_users.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div>
            <label for="token_name">token name</label>
            <input type="text" id="token_name" name="token_name">
        </div>
        <div>
            <label for="decimals">decimals</label>
            <input type="float" id="decimals" name="decimals">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>