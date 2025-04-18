<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

    <h2 style="text-align: center;">Connexion</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red; text-align: center;">
            <?= esc(session()->getFlashdata('error')) ?>
        </p>
    <?php endif; ?>

    <form action="/Login" method="post">
        <table align="center">
            <tr>
                <td>Nom d'utilisateur :</td>
                <td><input type="text" name="login" required></td>
            </tr>
            <tr>
                <td>Mot de passe :</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Se connecter">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
