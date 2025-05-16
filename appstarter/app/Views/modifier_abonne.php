<h2>Modifier un abonné</h2>
<form method="POST" action="<?= site_url('/admin/modifier-abonne/' . $abonne['matricule_abonne']) ?>">
    <input type="text" name="nom_abonne" value="<?= esc($abonne['nom_abonne']) ?>" required><br>
    <input type="date" name="date_naissance_abonne" value="<?= esc($abonne['date_naissance_abonne']) ?>" required><br>
    <input type="date" name="date_adhesion_abonne" value="<?= esc($abonne['date_adhesion_abonne']) ?>" required><br>
    <input type="text" name="adresse_abonne" value="<?= esc($abonne['adresse_abonne']) ?>" required><br>
    <input type="text" name="telephone_abonne" value="<?= esc($abonne['telephone_abonne']) ?>" maxlength="10" required><br>
    <input type="text" name="CSP_abonne" value="<?= esc($abonne['CSP_abonne']) ?>" required><br>
    <input type="text" name="login" value="<?= esc($abonne['login']) ?>" required><br>
    <input type="text" name="mot_de_passe" value="<?= esc($abonne['mot_de_passe']) ?>" required><br>
    <button type="submit">Modifier</button>
</form>
