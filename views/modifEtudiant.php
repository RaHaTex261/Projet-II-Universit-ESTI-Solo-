<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>

        <link rel="stylesheet" href="css/insert.css">

    </head>

    <body>
        <h1> FORMULAIRE DE MODIFICATION DE L'ETUDIANT:</h1><h1 class="aqua"></h1>
        <form class="box" method="post" action="controllers/ManageEtudiant.php?update=update">
            <div>
                <input type="hidden" name="id" id="id" value="2">
            </div>

            <div>
                <h4 for="nom">NOM</h4>
                <input type="text" name="nom" id="nom" value="" required>
            </div>

            <div>
                <h4 for="prenom">PRENOM</h4>
                <input type="text" name="prenom" id="prenom" value="" required>
            </div>

            <div>
                <h4 for="tel">NUMERO DE TELEPHONE</h4>
                <input type="text" name="tel" id="tel" value="" required>
            </div>

            <div>
                <h4 for="email">EMAIL</h4>
                <input type="email" name="email" id=email value="" required>
            </div>

            <div>
                <h4 for="mdp">MOT DE PASSE</h4>
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
            </div>

            <div>
                <h4 for="img">INSERER IMAGE</h4>
                <input type="file" accept="image/png, image/jpeg" name="img" id="img" required>
            </div>

            <div>
                <input type="submit" value="OK">
            </div>
        </form>
    </body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->