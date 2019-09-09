<?php 

/* Stampo lista album chive valore, con funzione php esterna */
function PrintKeyValue($data){

    /* echo "<ul>"; */
    foreach ($data as $values) {

        echo "<div class='card'><img class='copertina' src='img/". $values["url_img"] ."' alt='". $values["url_img"] ."'>";
        echo "<ul>".
                "<li>Artista: ". $values["artist"] . "</li>".
                "<li>Album: ". $values["album"] . "</li>".
                "<li>Data di pubblicazione: ". $values["relase"] . "</li></ul></div>";  
    }
    
};







?>
