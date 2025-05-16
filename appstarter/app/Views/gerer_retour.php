<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les retours</title>
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
        /* Suppression des styles de statut et d'action */
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestion des Retours</h1>
        
        <div class="actions-container">
            <a href="#" class="btn">Ajouter retour</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID Retour</th>
                    <th>ID Emprunt</th>
                    <th>Abonné</th>
                    <th>Livre</th>
                    <th>Exemplaire</th>
                    <th>Date d'emprunt</th>
                    <th>Date de retour prévue</th>
                    <th>Date de retour effective</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>R001</td>
                    <td>E005</td>
                    <td>Dubois (1005)</td>
                    <td>Les Misérables</td>
                    <td>EX-5678</td>
                    <td>2025-04-12</td>
                    <td>2025-04-26</td>
                    <td>2025-04-25</td>
                    <td>À temps</td>
                </tr>
                <tr>
                    <td>R002</td>
                    <td>E006</td>
                    <td>Garcia (1006)</td>
                    <td>La Peste</td>
                    <td>EX-6789</td>
                    <td>2025-04-15</td>
                    <td>2025-04-29</td>
                    <td>2025-04-30</td>
                    <td>Retard (1j)</td>
                </tr>
                <tr>
                    <td>R003</td>
                    <td>E007</td>
                    <td>Martin (1002)</td>
                    <td>Voyage au centre de la Terre</td>
                    <td>EX-7890</td>
                    <td>2025-04-18</td>
                    <td>2025-05-02</td>
                    <td>2025-05-01</td>
                    <td>À temps</td>
                </tr>
                <tr>
                    <td>R004</td>
                    <td>E008</td>
                    <td>Dupont (1001)</td>
                    <td>Le Comte de Monte-Cristo</td>
                    <td>EX-8901</td>
                    <td>2025-04-20</td>
                    <td>2025-05-04</td>
                    <td>2025-05-10</td>
                    <td>Retard (6j)</td>
                </tr>
            </tbody>
        </table>
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="/admin" style="color: #00796b; text-decoration: none; font-weight: bold;">Retour à l'espace administrateur</a>
        </div>
    </div>
</body>
</html>