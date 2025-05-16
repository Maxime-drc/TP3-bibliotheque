<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les demandes</title>
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
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .btn {
            display: inline-block;
            padding: 18px 36px;
            margin-bottom: 25px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #004d40;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #e0e0e0;
            padding: 16px;
            text-align: center;
        }
        thead {
            background-color: #00796b;
            color: white;
        }
        th {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1rem;
            letter-spacing: 1px;
        }
        tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }
        tbody tr:hover {
            background-color: #e0f7fa;
        }
        .actions-container {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestion des Demandes</h1>
        
        <div class="actions-container">
            <a href="#" class="btn">Ajouter une demande</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Abonné</th>
                    <th>Livre demandé</th>
                    <th>Date de demande</th>
                    <th>Priorité</th>
                    <th>Statut</th>
                    <th>Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>D001</td>
                    <td>Dupont (1001)</td>
                    <td>Harry Potter et la Chambre des Secrets</td>
                    <td>2025-05-05</td>
                    <td>Normale</td>
                    <td>En attente</td>
                    <td>Besoin pour un exposé</td>
                </tr>
                <tr>
                    <td>D002</td>
                    <td>Martin (1002)</td>
                    <td>Le Seigneur des Anneaux</td>
                    <td>2025-05-08</td>
                    <td>Haute</td>
                    <td>Approuvée</td>
                    <td>Réservation pour le club de lecture</td>
                </tr>
                <tr>
                    <td>D003</td>
                    <td>Durand (1003)</td>
                    <td>Crime et Châtiment</td>
                    <td>2025-05-10</td>
                    <td>Basse</td>
                    <td>Rejetée</td>
                    <td>Indisponible actuellement</td>
                </tr>
                <tr>
                    <td>D004</td>
                    <td>Petit (1004)</td>
                    <td>Dune</td>
                    <td>2025-05-12</td>
                    <td>Normale</td>
                    <td>En attente</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="/admin" style="color: #00796b; text-decoration: none; font-weight: bold;">Retour à l'espace administrateur</a>
        </div>
    </div>
</body>
</html>