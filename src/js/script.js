$ = require("jquery");

function getAlbumList(){

    $.ajax({

        url: "api_disc.php",
        method: "GET",

        success: function(data){
            console.log("succes!!");
            console.log(data);
            
        
            handlebarsPrintAlbum(data);

        },
        error: function(errors){
            console.log("errore collegamento ajax api_disc.php");
            
        }
    });
};

function handlebarsPrintAlbum(data){

    var source = $('#album-template').html();
    var template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {
        const el = data[i];

        var context = {
            name: el.artist,
            album: el.album,
            relase: el.relase,
            url: "img/" + el.urlimg
            
            
        };
        var html = template(context);
        $('.res').append(html);
        
       
        
        
    }

};



function init() {

    console.log("Hello World");
    getAlbumList();


}

$(document).ready(init);
