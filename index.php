
<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
<!--    For search engines-->
    <meta name="robots" content="index, follow">
    <meta name="description" content="Bellissimo:Natural Beauty! Nagelstudio te Averbode.U kan hier terecht voor Manicure, Gellak: full color of french en verwijderen van gellak.">
<!--   View -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<!--    Open Graph to display on social media-->
    <meta property="og:url"                content="http://bellissimo-beauty.be" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Bellissimo  Natural Beauty" />
    <meta property="og:description"        content="Ik ben Nancy Volders en heb in 2018 mijn nagelstudio Bellissimo opgericht te Averbode. Mijn praktijk is gelegen in Averbode en ik ontvang jou graag na afspraak, telefonisch of via onze website." />
    <meta property="og:image"              content="http://bellissimo-beauty.be/img/logo.jpg"  />
    
<!--    stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
<!--    script carousel-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    google font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <title>Bellissimo</title>
</head>
<body>
<?php require_once('include/head.php'); 
      require_once('admin/promoList.php'); 
      $promo= new promoList();
    ?>
  
<!---------------------------------------  POPUP PROMO------------>
  
   <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <img src="<?php print($promo["foto"]);?>" alt="promo foto">
    <p><?php print($promo["omschrijving"]);?></p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  
   <main>
   <h1 class="overOns"><strong>Over ons: </strong></h1><br>
   <p class="overOns">Ik ben Nancy Volders en heb in 2018 <em><strong>Bellissimo</strong></em> opgericht te Averbode. Ik volgde verschillende opleidingen in manicure en nagelstyling.
Bij <em><strong>Bellissimo</strong></em> staat de klant op de éérste plaats. Voor mij is het heel belangrijk dat de klant er goed uit ziet en zich goed voelt tijdens de behandeling. Het gebruik van professionele producten en een vlotte babbel staat hier garant voor.
Mijn praktijk is gelegen in Averbode en ik ontvang jou graag na afspraak, telefonisch of via onze website.</p><br><br>
<!---------------------------------Image CAROUSEL------------------------------------->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>

    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/IMG_3061.JPG" alt="Nagel studio">
      <div class="carousel-caption">
        <h3>Bellissimo</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="img/IMG_3039.JPG" alt="Gel polish">
      <div class="carousel-caption">
         <h3>Bellissimo</h3>
        
      </div>
    </div>

    <div class="item">
      <img src="img/IMG_3031.JPG" alt="Gel polish">
      <div class="carousel-caption">
         <h3>Bellissimo</h3>
        
      </div>
    </div>
        <div class="item">
      <img src="img/IMG_3070.JPG" alt="instruments">
      <div class="carousel-caption">
         <h3>Bellissimo</h3>
        
      </div>
    </div>
        <div class="item">
      <img src="img/IMG_3060.JPG" alt="Gel polish">
      <div class="carousel-caption">
         <h3>Bellissimo</h3>
        
      </div>
    </div>
        <div class="item">
      <img src="img/IMG_3078.JPG" alt="Gel polish">
      <div class="carousel-caption">
         <h3>Bellissimo</h3>
        
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
<br>

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
    <div class="share-wrapper clearfix text-center">

        <div class="fb-share-button" data-href="http://bellissimo-beauty.be/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbellissimo-beauty.be%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Delen</a></div>
                       
        <div class="fb-like" data-href="http://bellissimo-beauty.be/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <div><a class="twitter-share-button"href="https://twitter.com/intent/tweet">Tweet</a></div>
        <div><a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"></a></div>
    </div>   
       
     <br><br><br>
     

<?php  require_once('include/socialeMedia.php');?>  
   </main>


      
</body>
</html>


































