$ = require("jquery");

function getAlbumList(){

    $.ajax({

        url: "api_disc.php",
        method: "GET",

        success: function(data){
            console.log("succes!!");
            console.log(data);
            
        
            handlebarsPrintAlbum(data);
            getArrArtisti(data);

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

function getArrArtisti(data){

    var arrArtisti = [];

    for (let i = 0; i < data.length; i++) {
        const el = data[i];

        if (!arrArtisti.includes(el.artist)){
            arrArtisti.push(el.artist);
        }

        
    }
    console.log(arrArtisti);
    
    var string = "";

    for (let j = 0; j < arrArtisti.length; j++) {
        const el = arrArtisti[j];

        string = "<option>"+ el + "</option>";
        
        $('#select_artist').append(string);
    
    }
}



function init() {

    console.log("Hello World");
    getAlbumList();


}

$(document).ready(init);
