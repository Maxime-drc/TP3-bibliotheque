<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<div class="container">
    <h2>Connexion</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p class="error"><?= esc(session()->getFlashdata('error')) ?></p>
    <?php endif; ?>

    <form action="/Login" method="post">
        <div class="form-group">
            <label for="username">Identifiant</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="submit" value="Se connecter">
        </div>
    </form>
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
            font-size: 16px;
        }

        .container {
            width: 360px;
            margin: 60px auto;
            padding: 30px;
            background-color: white;
            border: 2px solid #b2dfdb;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #00796b;
            font-size: 2rem;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            vertical-align: middle;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #00796b;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #b2dfdb;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #00796b;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 121, 107, 0.3);
        }

        input[type="submit"] {
            background-color: #00796b;
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #004d40;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .error {
            color: #d32f2f;
            text-align: center;
            margin-bottom: 15px;
            padding: 8px;
            background-color: #ffebee;
            border-radius: 4px;
            border-left: 4px solid #d32f2f;
        }
        
        label {
            color: #00796b;
            font-weight: bold;
        }
    </style>