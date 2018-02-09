<?php
include_once ('./functions/connectionPDO.php');
if(isset($_POST['envoyer'])) {
    $title = $_POST['title'];
    $actors = $_POST['actors'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];
    $prodYear = $_POST['year_of_prod'];
    $language = $_POST['language'];
    $category = $_POST['category'];
    $storyline = $_POST['storyline'];
    $video = $_POST['video'];
    $tabError = array();

    if(empty($title) || strlen($title) < 5) {
        array_push($tabError, "Veuillez entrer le titre du film");
    }
    if(empty($actors) || strlen($actors) < 5) {
        array_push($tabError, "Veuillez renseigner les noms des acteurs");
    }
    if(empty($director) || strlen($director) < 5) {
        array_push($tabError, "Veuillez renseigner le directeur du film");
    }
    if(empty($producer) || strlen($producer) < 5) {
        array_push($tabError, "Veuillez renseigner le producteur du film");
    }
    if(empty($prodYear)) {
        array_push($tabError, "Veuillez renseigner une année de production");
    }
    if(empty($category)) {
        array_push($tabError, "Veuillez renseigner une catégorie pour le film");
    }
    if(empty($storyline) || strlen($storyline) < 5) {
        array_push($tabError, "Veuillez renseigner un synopsis pour ce film");
    }
    if(empty($video) || !filter_var($video, FILTER_VALIDATE_URL)) {
        array_push($tabError, "Veuillez entrer une URL valide");
    }
    if (count($tabError) > 0) {
        $message = "<ul>";
        for ($i = 0 ; $i < count($tabError) ; $i++) {
            $message .= "<li>" . $tabError[$i] . "</li>";
        }
        $message .= "</ul>";
        echo ($message);
        include('index.php');
    }
    else {
        $db = connectionPDO();
        if(!$db) {
            echo 'erreur de connection';
        }
        else {
            $requete = "INSERT INTO movies (ID_MOVIES, title, actors, director, producer, year_of_prod, language, category, storyline, video) 
                        VALUES (NULL, '$title', '$actors', '$director', '$producer', '$prodYear', '$language', '$category', '$storyline', '$video')";
            $result = $db->query($requete);
            echo 'Le film a bien été ajouté';
        }
    }

}
else {
    echo 'Veuillez remplir correctement le formulaire';
}