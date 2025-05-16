<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bibliothèque</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            color: #003366;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #003366;
            margin-bottom: 40px;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .menu-button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            width: 300px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .menu-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Bibliothèque abonné</h1>

    <div class="button-container">
        <a href="listelivre.php" class="menu-button">Voir la liste des livres disponibles</a>
        <a href="exemplairelivre.php" class="menu-button">Liste des exemplaires disponibles à l’emprunt</a>
        <a href="empreintabonne.php" class="menu-button">Mes exemplaires empruntés</a>
        <a href="infoabonne.php" class="menu-button">Mes informations</a>
    </div>

</body>
</html>
