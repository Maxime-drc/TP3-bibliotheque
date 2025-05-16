<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un livre</title>
</head>
<body>
    <h1>Ajouter un livre</h1>
    <form action="/ajouter_livre" method="post">
        <label for="code_catalogue">Code catalogue :</label><br>
        <input type="text" id="code_catalogue" name="code_catalogue" required><br><br>

        <label for="titre_livre">Titre :</label><br>
        <input type="text" id="titre_livre" name="titre_livre" required><br><br>

        <label for="theme_livre">Thème :</label><br>
        <input type="text" id="theme_livre" name="theme_livre"><br><br>

        <input type="submit" value="Ajouter le livre">
    </form>
</body>
</html>
