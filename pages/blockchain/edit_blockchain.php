<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer une blockchain</title>
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

    <h1>Editer un utilisateur</h1>

    <form action="../assets/php/controllers/blockchain/create_blockchain" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
         <div>
            <label for="name">name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="logo">logo</label>
            <input type="text" id="logo" name="logo">
        </div>
        <div>
            <label for="blockchain">blockchain</label>
            <input type="text" id="blockchain" name="blockchain">
        </div>
        <div>
            <label for="symbol">symbol</label>
            <input type="text" id="symbol" name="symbol">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>