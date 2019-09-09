<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="album-template" type="text/x-handlebars-template">
     
    <div class="card">

      <ul>
        <li><strong>Artista: </strong> {{name}}</li>
        <li><strong>Album: </strong> {{album}}</li>
        <li><strong>Data di Pubblicazione: </strong> {{relase}}</li>
      </ul>

    </div>
      

    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="css/master.css">
    <!-- JS: MY SCRIPT -->
    <script src="js/script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>Spotify-Web</title>

    

    <!-- DICHIARAZIONE VARIABILI PHP -->
    <?php 

    /* Includo il Mio framework di funzioni esterne */
    include 'includes/functions.php';
    /* include 'api_disc.php'; */
    include 'includes/db_albums.php';

    include 'includes/db_img.php';
      
    ?>
    
  </head>


  <!-- BODY -->
  <body>

    
    <div class="container">

      
      <div class="res">
      <h1>Album in evidenza</h1>

      
        
        <?php 

          /* Stampo con funzione php */
          echo PrintKeyValue($albums);
         

        

        

        ?>
      </div>
        
    </div>
      



            

  
  </body>
</html>