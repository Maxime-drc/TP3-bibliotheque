<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les livres</title>
</head>
<body>
    <div class="container">
        <h1>Gestion des Livres</h1>
        
        <div class="actions-container">
            <a href="#" class="btn">Ajouter un livre</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Titre</th>
                    <th>Thème</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234567890123</td>
                    <td>Le Petit Prince</td>
                    <td>Fiction</td>
                </tr>
                <tr>
                    <td>2345678901234</td>
                    <td>Notre-Dame de Paris</td>
                    <td>Roman historique</td>
                </tr>
                <tr>
                    <td>3456789012345</td>
                    <td>Germinal</td>
                    <td>Roman social</td>
                </tr>
                <tr>
                    <td>4567890123456</td>
                    <td>Les Misérables</td>
                    <td>Roman</td>
                </tr>
            </tbody>
        </table>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="/admin" style="color: #00796b; text-decoration: none; font-weight: bold;">Retour à l'espace administrateur</a>
        </div>
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