<?php 
    /* IDENTIFICAZIONE OGGETTO JSON */
    header('Content-type: application/json');

    $img_url = [
        "Guns'n'roses" => [
            "Appetite for Destruction" => "",
            "Use Your Illusion II" => "",
        ],

        "Nirvana" => [
            "In Utero" => "",
            "Nevermind" => ""
        ],
        "Articolo 31" => [
            "Strade di città" => ""
        ],
        "Metallica" => [
            "Metallica (album)" => "",
            "Master of Puppets" => ""
        ],
        "Misfits" => [
            "Die, Die My Darling" => ""
        ],
        "Red Hot Chili Peppers" => [
            "The Uplift Mofo Party Plan" => ""
        ],
        "Litfiba" => [
            "17 re" => "17 re"
        ]
    ];

    
    echo json_encode($img_url);
?>