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

    <!-- Home CSS-->
    <link rel="stylesheet" href="/css/home.css">

</head>

<body>
    <!-- NavBar -->
    <nav class="navbar justify-content-between bg-dark">
        <form class="form-inline">
            <img src="/img/logo-zfitness.png" style="width: 38%;padding-right: 9%;">
            <img src="/img/logo-sokeo.png" style="width: 17%;">
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
        <div>

            <img src="/img/logo-happybody.png" class="imgHappyBoddy" style="display: block;margin-left: auto;margin-right: auto;">
            <br>
            <a style="color:azure; font-family:Verdana;font-style: italic;">
                <center>Choisissez votre thématique </center>
            </a>
        </div>
    </div>
    <div class="owl-carousel owl-theme">
                <div class="item">
                <a href="/articles/activite" class="owl-lazy"><?= $this->Html->image('/img/people-2592247_1920.jpg'); ?></a>
                </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/sport-2262083_1920.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/gym-room-1180062_1920.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/yoga-3053488_1920.jpg'); ?>
        </a>
        </div>
        <div class="item">
        <a href="/" class="owl-lazy"><?= $this->Html->image('/img/dance-3134828_1920.jpg'); ?>
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

    <!-- Home JS -->
    <script src="/js/home.js"></script>
</body>

</html>