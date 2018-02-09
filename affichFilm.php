<?php
    include_once ('functions/connectionPDO.php');
    $db = connectionPDO();
    $requete = 'SELECT * FROM movies';
    $result = $db->query($requete);

    while($donnees = $result->fetch(PDO::FETCH_ASSOC)) {
        echo("<tr>
                    <td>".$donnees['title']."</td>"
                    ."<td>".$donnees['actors']."</td>"
                    ."<td>".$donnees['director']."</td>"
                    ."<td>".$donnees['producer']."</td>"
                    ."<td>".$donnees['year_of_prod']."</td>"
                    ."<td>".$donnees['language']."</td>"
                    ."<td>".$donnees['category']."</td>"
                    ."<td>".$donnees['storyline']."</td>"
                    ."<td>".$donnees['video']."</td>".

            "<tr>");

    }


