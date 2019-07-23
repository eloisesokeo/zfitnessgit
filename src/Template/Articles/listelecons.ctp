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
    <link rel="stylesheet" href="/css/owl.carousel.css">

    <!-- ListeDesLecons CSS-->
    <link rel="stylesheet" href="/css/listedeslecons.css">

</head>

<body>

    <!-- NavBar -->
    <nav class="navbar justify-content-between bg-dark">
        <form class="form-inline">
            <img src="/img/logo-viv-eden.png" style="width: 57%;padding-right: 7%;">
        </form>
        <div class="col-2 d-flex justify-content-end"><a class="liens" href="#"
                style="text-decoration: none; color:#9177BB;">FR |</a><a class="liens_en" href="#"
                style="text-decoration: none;color:#9177BB">EN</a></div>
    </nav>
    <!-- Fin NavBar -->
    <!-- Row Un -->
    <div class="container-fluid" style="background-color: #343A40;">
        <br>
        <br>
        <a href="/articles/activite"><img src="/img/back-button.png" alt=""/></a>
        <div>

  <div class="row"><!--text italic row-->
    <div class="col-12"><h3 class="italic-sous-titres text-center" style="color:#9177BB; font-weight: bold">Cardio Training<em style="color:white;font-weight: lighter;font-style: normal;"> Z'Walking</em></h3></div>
    <div class="col-12"><h3 class="italic-sous-titres text-center" style="color:white"><em style="font-weight: 100;">Choisissez votre niveau</em></h3></div>
  </div><!--fermeture row-->

<br>
<br>
<div class="row"><!--Titre niveau initiation row-->
  <div class="col-6 d-flex flex-row"><h1 class="niveau" style="color:white;margin-bottom: 3%;font-weight: bold;">Initiation</h1><img src="/img/Halteresinitiation.png" class="imgHalteres"></div>
</div><!--fermeture row-->
</div><!--fermeture premier container-->



<div class="owl-carousel owl-theme">
                <div class="item">
                <a href="/articles/listelecons" class="owl-lazy"><?= $this->Html->image('/img/91.jpg'); ?></a>
                </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/92.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/93.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/94.jpg'); ?>
        </a>
        </div>
</div>
<br>
<br>
<div class="row"><!--Titre niveau intermediaire row-->
<div class="col-6 d-flex flex-row"><h1 class="niveau" style="color:white;margin-bottom: 3%;font-weight: bold;">Intermediaire</h1><img src="/img/Halteresintermediaire.png" class="imgHalteres"></div>
</div><!--fermeture row-->
</div>

<div class="owl-carousel owl-theme">
                <div class="item">
                <a href="/articles/leconvideoload" class="owl-lazy"><?= $this->Html->image('/img/IMG_3935.jpg'); ?></a>
                </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/126.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/127.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/IMG_3950.jpg'); ?>
        </a>
        </div>
</div>

<br>
<br>
<div class="row"><!--Titre niveau avancé row-->
<div class="col-6 d-flex flex-row"><h1 class="niveau" style="color:white;margin-bottom: 3%;font-weight: bold;">Avancé</h1><img src="/img/Halteresavancee.png" class="imgHalteres"></div>
</div><!--fermeture row-->
</div><!--fermeture troisieme container-->


<div class="owl-carousel owl-theme">
                <div class="item">
                <a href="/articles/listelecons" class="owl-lazy"><?= $this->Html->image('/img/91.jpg'); ?></a>
                </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/92.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/127.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/IMG_3950.jpg'); ?>
        </a>
        </div>
</div>

   <!-- Script -->

    <!-- JQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- OwlCarousel JS -->
    <script src="/js/owl.carousel.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- ListeDesLecons JS -->
    <script src="/js/listedeslecons.js "></script>

  </body>
</html>
