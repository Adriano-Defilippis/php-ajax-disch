$ = require("jquery");

function getAlbumList(){

    $.ajax({

        url: "api_disc.php",
        method: "GET",

        success: function(data){
            
            /* Funzione per stampare con handlebars */
            handlebarsPrintAlbum(data);

            /* Funzione per richiedere all'api l'url dell'immagine */
            getImgUrl();
        },
        error: function(errors){
            console.log("errore collegamento ajax api_disc.php");
            
        }
    });
}

function handlebarsPrintAlbum(data){

    var source = $('#album-template').html();
    var template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {
        const el = data[i];

        var context = {
            name: el.artist,
            album: el.album,
            relase: el.relase
        };
        var html = template(context);
        $('.res').append(html);
    }

} 

function getImgUrl(){

    $.ajax({

        url: "api_img.php",
        method: "GET",

        success: function(data){
            console.log("succes getimgURL!!");
            console.log(data);

            
            
        },
        error: function(errors){
            console.log("errore richiesta url img");
            
        }
    });

};

function init() {

    console.log("Hello World");
    /* getAlbumList(); */

    
}

$(document).ready(init);
