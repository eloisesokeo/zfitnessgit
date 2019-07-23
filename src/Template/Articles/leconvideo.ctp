<!doctype html>
<html lang="fr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!--font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    
        <!-- OwlCarousel CSS-->
        <link rel="stylesheet" href="/css/owlcarousel/owl.carousel.css">

        <!-- Vivify CSS -->
        <link href="/css/vivify.min.css" rel="stylesheet" type="text/css"/>

        <!-- Animate CSS-->
        <link href="/css/animatate.css" rel="stylesheet" type="text/css"/>

        <!-- LeconVideoQuitter CSS-->
        <link rel="stylesheet" href="/css/leconvideoquitter.css">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>
  <div class="maskBody">
  <nav class="navbar justify-content-between" style="background-color: transparent; z-index: -10;">
    <form class="form-inline">
      <img src="/img/logo-zfitness.png" style="width: 13%;padding-right: 2%;">
      <img src="/img/logo-viv-eden.png" style="width: 13%;">
    </form>
    <div class="col-2 d-flex justify-content-end"><a class="liens" href="#" style="text-decoration: none; color:white;">FR |</a><a class="liens_en" href="#" style="text-decoration: none;color:white">EN</a></div>
  </nav>
  <section class="sectionButton">
<a href="/articles/listelecons">     
    <button class="buttonRetourQuitter" and="" style="background-color: rgba(0, 0, 0, 0.4);outline-style: none;">Retour</button>
</a>
  </section>
  <section>  
    <button class="buttonRetourQuitter btnQuitter" style="background-color: rgba(0, 0, 0, 0.4);outline-style: none;padding-top: -12%;margin-top: 0%;">Quitter</button>
    <script>
    $( ".btnQuitter" ).click(function() {
      $('.maskBody').css({
                'background-color': 'rgba(0, 0, 0, 0.4)',
                'background': 'rgba(0, 0, 0, 0.4)',
                'color': 'rgba(0, 0, 0, 0.4)',
            });
            $('.popWindow').css({
                'visibility' : 'inherit',
                'opacity' : '1',
            });
            const element =  document.querySelector('.popWindow')
            element.classList.add('animated', 'fadeIn')
            $('.btnConfirmer').css({
                'visibility' : 'inherit',
                'opacity' : '1',
            });
            $('.btnReprendre').css({
                'visibility' : 'inherit',
                'opacity' : '1',
            });
    });
    </script>

  </section>
  <div class="center popWindow" style="padding-top: -14%;margin-left: 17%;padding-bottom: -11%;">
<img class="logoViveden" src="/img/logo-viv-eden.png" style="display: block;width: 14%;margin-left: 30%;padding-bottom: 2%;">
<img src="/img/loader.png" class="imgLoader">
<p class="quitterSessionp">
  Une session est en cours, voulez-vous vraiment quitter ?
</p>
<section style="padding-left: 25%;">
    <a href="/articles/leconvideofini">     
    <button class="buttonConfirmerQuitter btnConfirmer" and="" style="background-color: rgba(0, 0, 0, 0.4);outline-style: none;">Confirmer</button>
 </a>
    <button class="buttonConfirmerQuitter btnReprendre" and="" style="background-color: rgba(0, 0, 0, 0.4);outline-style: none;">Reprendre</button>
    <script>
          $( ".btnReprendre" ).click(function() {
      $('.maskBody').css({
                'background' : 'none',
                'opacity' : '1',
            });
            $('.popWindow').css({
                'visibility' : 'hidden',
            });
    });
    </script>
  </section>
</div>
<section class="sectionStyleMenuDroite">
    <table>
      <tbody><tr>
        <td style="width:20%;border-left: medium solid #fff;font-family:Arial;font-weight: bold;font-size: xx-large;color: white;padding-left: 3%;">
          Cardio Training
          <p style="font-weight: lighter;font-size: small;">
            Z'Walking
            <img src="/img/Halteresintermediaire.png" style="width: 15%;padding-left: 1%;">
          </p>
          <img src="/img/card.png" style="margin-top: -13%;">
          <img src="/img/time.png" style="margin-top: 32%;margin-left: -45%;">
        </td>
      </tr>
    </tbody></table>
  </section>
  <div class="footer" style="z-index: -10; position:relative">
    <img src="/img/logo-sokeoblack.png" style="width: 9%;margin-right: -82%;">
  </div>
</div>



 <!-- JQuery JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- <script>
alert("Coucou");
document.querySelector("#Bouton").onclick = function() {
if (window.getComputedStyle(document.querySelector('#tonDiv')).background=='none'){
document.querySelector("#tonDiv").style.background="linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45));";
} else { 
document.querySelector("#tonDiv").style.background="none";
}
}
</script> -->

</body>
