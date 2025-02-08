<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifCours</title>

    <link rel="stylesheet" href="css/insert.css">
</head>
<body>
        <h1>MODIFICATION DU COURS:</h1><h1 class="aqua"> </h1>
        <form class="box" action="controllers/manageCours?update=update" method="post">

            <div>
                <input type="hidden" name="id" id="id" value="2">
            </div>

            <label for="cours"> COURS </label>
            <input type="text" name="cours" id="cours" value="1" required>

            <label>PROFESSEUR</label>
            <select name="prof">
               
            </select>

            <br><br>
            <label>CATEGORIE</label>
            <select name="categorie">
                <option value="1">Informatique</option>
                <option value="2">Gestion</option>
                <option value="3">Communication</option>
            </select>

            <input type="submit" value="OK">
        </form>
        
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->