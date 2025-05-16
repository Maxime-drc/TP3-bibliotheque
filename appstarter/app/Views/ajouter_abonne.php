<h2>Ajouter un abonné</h2>
<form method="POST" action="<?= site_url('/admin/ajouter-abonne') ?>">
    <input type="text" name="nom_abonne" placeholder="Nom" required><br>
    <input type="date" name="date_naissance_abonne" required><br>
    <input type="date" name="date_adhesion_abonne" required><br>
    <input type="text" name="adresse_abonne" placeholder="Adresse" required><br>
    <input type="text" name="telephone_abonne" placeholder="Téléphone" maxlength="10" required><br>
    <input type="text" name="CSP_abonne" placeholder="CSP" required><br>
    <input type="text" name="login" placeholder="Login" required><br>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
    <button type="submit">Ajouter</button>
</form>
