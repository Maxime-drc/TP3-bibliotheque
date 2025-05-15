<?php
session_start();
$abonne_id = $_SESSION['abonne_id'];
$mysqli = new mysqli("localhost", "root", "", "bibliotheque");

$sql = "SELECT e.cote, l.titre, emp.date_emprunt, emp.date_retour, emp.renouvellement
        FROM emprunts emp
        JOIN exemplaires e ON emp.cote = e.cote
        JOIN livres l ON e.code_catalogue = l.code_catalogue
        WHERE emp.abonne_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $abonne_id);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Mes emprunts</h2><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['titre']} - Cote : {$row['cote']} - Emprunté le : {$row['date_emprunt']}, Retour : {$row['date_retour']}</li>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes emprunts</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            color: #003366;
            padding: 40px;
        }
        h1 {
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #007BFF;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Mes exemplaires empruntés</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date d'emprunt</th>
            <th>Date de retour prévue</th>
        </tr>
        <tr>
            <td>Livre X</td>
            <td>Auteur X</td>
            <td>2025-05-01</td>
            <td>2025-06-01</td>
        </tr>
        <!-- Remplace avec tes données dynamiques -->
    </table>
<a href="bibliotheque.php">Retour à la bibliothèque</a>
</body>
</html>