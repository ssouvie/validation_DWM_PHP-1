<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <form action="./controllers/form.php" method="POST">
        <div>
            <label for="pseudo">Identifiant</label>
            <input type="text" name="pseudo">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>