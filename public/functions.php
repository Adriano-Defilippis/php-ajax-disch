<?php 

function PrintKeyValue($data){

    echo "<ul>";
    foreach ($data as $values) {

        echo
            "<li>". $values["artist"] . "</li>".
            "<li>". $values["album"] . "</li>".
            "<li>". $values["relase"] . "</li>";  
    }
    echo "</ul>"."<br>";
};



?>
