
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bellissimo:Natural Beauty! Nagelstudio te .U kan hier terecht voor Manicure, Gellak: full color of french en verwijderen van gellak.">
    <meta name="keywords" content="HTML,CSS,PHP,SQL,JavaScript, Bootstrap">
    <meta name="author" content="Michiels Lynn">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!--    Open Graph to display on social media-->
    <meta property="og:url"                content="http://localhost/BELLISSIMO/index.php" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Bellissimo Natural Beauty" />
    <meta property="og:description"        content="Laat hier uw na." />
    <meta property="og:image"              content="img/image.jpg"  />
    
<!--    shortcut icon-->
    <link rel="shortcut icon" href="images/favico.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favico.png">
    
<!-- favicon genereren met afbeelding
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
-->
   <!-- IONICONS FONT -->
    <link rel="stylesheet" href="vendors/ionicons/css/ionicons.min.css">
    
<!--    stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bellissimo</title>
</head>
<body>
   <header>
       <div class="container">
<!-------------------------------menu----------------------------------------------->
           
            <a href="index.php" name="1"><img src="img/bellissimo.jpg"></a>
            <a class='btn btn-primary' href='index.php'>Home</a> 
            <a class='btn btn-primary' href='treatmentView.php'>Behandelingen</a>
            <a class='btn btn-primary' href='galery.php'>Foto galerij</a> 
            <a class="afsprakenagenda" href="https://www.afsprakenagenda.be/1221/bellissimo-natural-beauty">Maak een afspraak</a> 
            
<!-------------------------------script voor pop up afspraken----------------------->
           
            <script type="text/javascript">
                        (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://www.afsprakenagenda.be/button.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
            </script>
        </div> 
   </header>
   
   <main>
<!------------------------------- Load Facebook SDK for JavaScript ----------------->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!------------------------------- Load Twitter SDK for JavaScript ------------------>     
        <script>window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
        t._e.push(f);
            };

        return t;
        }(document, "script", "twitter-wjs"));</script>
<!------------------------------- Load Pinterest JavaScript------- ----------------->  
        <script
        type="text/javascript"
        async defer
        src="//assets.pinterest.com/js/pinit.js">
        </script>
          
<!-------------------------------- Your share button code -------------------------->
    <div class="share-wrapper">
        <div class="fb-share-button" data-href="http://localhost/BELLISSIMO/index.php" data-layout="button" data-size="small" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.index.php%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Delen</a></div>
        
        <div class="fb-like" data-href="https://www.index.php" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        
        <div><a class="twitter-share-button"href="https://twitter.com/intent/tweet">Tweet</a></div>
        <div><a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"></a></div>
    </div>   
       
       
   </main>
<?php  require_once('include/backHome.php'); ?><br><br><br><br>
<?php  require_once('include/socialeMedia.php');?>

      
</body>
</html>


































