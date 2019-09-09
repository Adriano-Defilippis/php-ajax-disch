<?php 

    header('Content-type: application/json');

    $artist = $_GET['artist'];

    $albums_2 = [
        [
            "artist" => "Nirvana",
            "album" => "Nevermind",
            "relase" => "24/09/1991",
            "urlimg" => "nirvana/nervermind.jpg"
            

        ],
        [
            "artist" => "Nirvana",
            "album" => "In Utero",
            "relase" => "24/09/1993",
            "urlimg" => "nirvana/In-Utero.jpg"

        ],
        [
            "artist" => "Metallica",
            "album" => "Master of Puppets",
            "relase" => "03/05/1986",
            "urlimg" => "metallica/master-of-puppets.jpg"

        ],
        [
            "artist" => "Litfiba",
            "album" => "17 re",
            "relase" => "12/12/1986",
            "urlimg" => "litfiba/17-re.jpg"

        ],
        [
            "artist" => "Misfits",
            "album" => "Die, Die My Darling",
            "relase" => "20/05/1984",
            "urlimg" => "misfits/Die-Die-My-Darling.jpg"

        ],
        [
            "artist" => "Articolo 31",
            "album" => "Strade di città",
            "relase" => "08/24/1993",
            "urlimg" => "articolo_31/strade-di-citta.jpg"

        ],
        [
            "artist" => "Red Hot Chili Peppers",
            "album" => "The Uplift Mofo Party Plan",
            "relase" => "09/24/1987",
            "urlimg" => "red_hot_chili_peppers/The-uplift-mofo-Party-Plan.jpg"

        ],
        [
            "artist" => "Metallica",
            "album" => "Metallica (album)",
            "relase" => "12/08/1991",
            "urlimg" => "metallica/black-album.jpg"

        ],
        [
            "artist" => "Guns'n'roses",
            "album" => "Use Your Illusion II",
            "relase" => "17/09/1991",
            "urlimg" => "guns_n_roses/Use-Your-Illusion-2.jpg"

        ],
        [
            "artist" => "Guns'n'roses",
            "album" => "Appetite for Destruction",
            "relase" => "21/07/1987",
            "urlimg" => "guns_n_roses/appetite-for-destruction.jpg",
            
        ],
        
    ]; 

    $res = [];

    foreach ($albums_2 as $album) {
        
        if ($album["artist"] == $artist) {
            $res[] = $album;
        };
    };



    echo json_encode($res);





?>


