<?php 

/* Stampo lista album chive valore, con funzione php esterna */
function PrintKeyValue($data){

    /* echo "<ul>"; */
    foreach ($data as $values) {

        echo "<ul>".
                "<li>Artista: ". $values["artist"] . "</li>".
                "<li>Album: ". $values["album"] . "</li>".
                "<li>Data di pubblicazione: ". $values["relase"] . "</li></ul>";  
    }
    /* echo "</ul>"."<br>"; */
};



?>
