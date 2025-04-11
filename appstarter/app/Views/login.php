<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

    <table align="center" style="height: 100px;">
        <tr>
            <td>
                <h2 align="center">Connexion</h2>
                <form action="login.php" method="post">
                    <table align="center">
                        <tr>
                            <td>Nom d'utilisateur :</td>
                            <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td>Mot de passe :</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Se connecter">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>

</body>
</html>
