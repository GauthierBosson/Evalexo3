<?php
include_once('functions/connectionPDO.php');
include_once('functions/callPage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="ajoutFilm.php">
    <label for="title">Titre du film </label>
    <input type="text" name="title" id="title"><br>
    <label for="actors">Acteurs </label>
    <input type="text" name="actors" id="actors"><br>
    <label for="director">Directeur </label>
    <input type="text" name="director" id="director"><br>
    <label for="producer">Producteur </label>
    <input type="text" name="producer" id="producer"><br>
    <label for="year_of_prod">Année de production</label>
    <select name="year_of_prod">
        <?php
        for($i = 1900; $i < date("2100")+1; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select><br>
    <label for="language">Langage </label>
    <select name="language" id="language">
        <option value="0">Français</option>
        <option value="1">Anglais</option>
        <option value="2">Allemand</option>
        <option value="3">Espagnol</option>
        <option value="4">Italien</option>
    </select><br>
    <label for="category">Catégorie </label>
    <select name="category" id="category">
        <option value="1">Action</option>
        <option value="2">horreur</option>
        <option value="3">Comedie</option>
        <option value="4">Science-fiction</option>
    </select><br>
    <label for="storyline">Synopsis </label>
    <textarea name="storyline" id="storyline"></textarea><br>
    <label for="video">Bande annonce</label>
    <input type="text" name="video"><br>
    <input type="submit" value="Envoyer" name="envoyer">
</form>
</body>
</html>


