$ = require("jquery");

function getAlbumList(){

    $.ajax({

        url: "api_disc.php",
        method: "GET",

        success: function(data){
            console.log("succes!!");
            console.log(data);
            
            
        },
        error: function(errors){
            console.log("errore collegamento ajax api_disc.php");
            
        }
    });
};

function init() {

    console.log("Hello World");
    getAlbumList()
}

$(document).ready(init);
