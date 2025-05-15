<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Administrateur</title>
</head>
<body>

    <h1>Espace Administrateur</h1>

    <nav>
        <ul>
            <li><a href="/gerer_livre"><button>Gérer les livres</button></a></li>
            <li><a href="/gerer_exemplaire"><button>Gérer les exemplaires</button></a></li>
            <li><a href="/gerer_abonne"><button>Gérer les abonnés</button></a></li>
        </ul>
    </nav>

    <p style="text-align: center;">Bienvenue dans votre espace de gestion de la bibliothèque admin. Utilisez les liens ci-dessus pour accéder aux différentes sections.</p>
    <div style="text-align: center; margin-top: 30px;">
        <a href="/Login" style="color: #00796b; text-decoration: none; font-weight: bold;">Retour à la page de connexion</a>
    </div>
</body>
</html>

<style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e0f7fa 25%, #ffffff 25%, #ffffff 50%, #e0f7fa 50%, #e0f7fa 75%, #ffffff 75%, #ffffff 100%);
            background-size: 40px 40px;
            min-height: 100vh;
            padding: 40px;
            margin: 0;
            font-size: 18px;
        }
        h1 {
            text-align: center;
            color: #00796b;
            font-size: 3rem;
            margin-bottom: 40px;
        }
        nav {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto 40px auto;
        }
        ul {
            list-style: none;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: nowrap;
        }
        li {
            display: inline-block;
            margin: 0 10px;
        }
        button {
            padding: 18px 36px;
            background-color: #00796b;
            color: white;
            border-radius: 8px;
            border: none;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #004d40;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        p {
            text-align: center;
            color: #555;
            font-size: 1.1rem;
            max-width: 800px;
            margin: 30px auto;
            line-height: 1.6;
        }
    </style>