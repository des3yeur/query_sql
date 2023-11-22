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
                    <a href="./show_token_solidity.php">Afficher token solidity</a>
                </li>
                <li>
                    <a href="./create_token_solidity.php">Créer token solidity</a>
                </li>
                <li>
                    <a href="./edit_token_solidity.php">Editer token solidity</a>
                </li>
                <li>
                    <a href="./delete_token_solidity.php">Supprimer token solidity</a>
                </li>
            </ul>
        </nav>
    </header>

    <h1>Editer un utilisateur</h1>

    <form action="../assets/php/controllers/blockchain_solidity/update_users.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div>
            <label for="token_name">token name</label>
            <input type="text" id="token_name" name="token_name">
        </div>
        <div>
            <label for="symbol">symbol</label>
            <input type="text" id="symbol" name="symbol">
        </div>
        <div>
            <label for="decimals">decimals</label>
            <input type="float" id="decimals" name="decimals">
        </div>
        <div>
            <label for="initial_supply">initial supply</label>
            <input type="float" id="initial_supply" name="initial_supply">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>