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
        <table>
            <tr>
                <td>Identifiant :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Se connecter"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>

<style>
        body {
            background-color:rgb(209, 218, 233);
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dceeff 25%, #eaf6ff 25%, #eaf6ff 50%, #dceeff 50%, #dceeff 75%, #eaf6ff 75%, #eaf6ff 100%);
            background-size: 40px 40px;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 360px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #007BFF;
        }

        table {
            width: 100%;
        }

        td {
            padding: 8px;
            vertical-align: middle;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>