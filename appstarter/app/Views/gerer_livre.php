<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les livres</title>
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
        h1, h2 {
            text-align: center;
            color: #00796b;
            margin-bottom: 40px;
        }
        h1 {
            font-size: 3rem;
        }
        h2 {
            font-size: 2rem;
            margin-top: 50px;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-bottom: 25px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            border: none;
        }
        .btn:hover {
            background-color: #004d40;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .btn-secondary {
            background-color: #757575;
        }
        .btn-secondary:hover {
            background-color: #616161;
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
        .search-container {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .search-form {
            display: flex;
            align-items: center;
            flex-grow: 1;
            margin-right: 20px;
        }
        .search-form input {
            flex-grow: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
        }
        .search-form button {
            padding: 12px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-weight: bold;
        }
        .cover-thumbnail {
            max-width: 50px;
            max-height: 75px;
            border-radius: 4px;
        }
        .status-available {
            color: #2e7d32;
            font-weight: bold;
        }
        .status-borrowed {
            color: #d32f2f;
            font-weight: bold;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            list-style: none;
            padding: 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a {
            display: block;
            padding: 8px 12px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #00796b;
            text-decoration: none;
        }
        .pagination a.active {
            background-color: #00796b;
            color: white;
            border-color: #00796b;
        }
        .pagination a:hover:not(.active) {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestion des Livres</h1>
        
        <div class="search-container">
            <form class="search-form">
                <input type="text" placeholder="Rechercher un livre par titre, auteur ou ISBN..." />
                <button type="submit">Rechercher</button>
            </form>
            <a href="/ajouter_livre" class="btn">Ajouter un livre</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Couverture</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année</th>
                    <th>Genre</th>
                    <th>Exemplaires</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>9782070368228</td>
                    <td><img src="/api/placeholder/50/75" alt="L'Étranger" class="cover-thumbnail"></td>
                    <td>L'Étranger</td>
                    <td>Albert Camus</td>
                    <td>1942</td>
                    <td>Roman</td>
                    <td>3 <span class="status-available">(2 disponibles)</span></td>
                    <td>
                        <a href="/modifier_livre?isbn=9782070368228" class="btn" style="padding: 5px 10px; font-size: 0.8rem;">Modifier</a>
                        <a href="#" class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>9782253004226</td>
                    <td><img src="/api/placeholder/50/75" alt="Les Misérables" class="cover-thumbnail"></td>
                    <td>Les Misérables</td>
                    <td>Victor Hugo</td>
                    <td>1862</td>
                    <td>Roman historique</td>
                    <td>2 <span class="status-borrowed">(0 disponible)</span></td>
                    <td>
                        <a href="/modifier_livre?isbn=9782253004226" class="btn" style="padding: 5px 10px; font-size: 0.8rem;">Modifier</a>
                        <a href="#" class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>9782072730672</td>
                    <td><img src="/api/placeholder/50/75" alt="Le Petit Prince" class="cover-thumbnail"></td>
                    <td>Le Petit Prince</td>
                    <td>Antoine de Saint-Exupéry</td>
                    <td>1943</td>
                    <td>Conte philosophique</td>
                    <td>5 <span class="status-available">(3 disponibles)</span></td>
                    <td>
                        <a href="/modifier_livre?isbn=9782072730672" class="btn" style="padding: 5px 10px; font-size: 0.8rem;">Modifier</a>
                        <a href="#" class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>9782070612758</td>
                    <td><img src="/api/placeholder/50/75" alt="Harry Potter à l'école des sorciers" class="cover-thumbnail"></td>
                    <td>Harry Potter à l'école des sorciers</td>
                    <td>J.K. Rowling</td>
                    <td>1997</td>
                    <td>Fantasy</td>
                    <td>4 <span class="status-available">(1 disponible)</span></td>
                    <td>
                        <a href="/modifier_livre?isbn=9782070612758" class="btn" style="padding: 5px 10px; font-size: 0.8rem;">Modifier</a>
                        <a href="#" class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">Supprimer</a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
        <div style="text-align: center; margin-top: 30px;">
            <a href="/admin" style="color: #00796b; text-decoration: none; font-weight: bold;">Retour à l'espace administrateur</a>
        </div>
    </div>
</body>
</html>