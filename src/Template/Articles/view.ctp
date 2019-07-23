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



<style>
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.card {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 300px;
    height: 400px;
    background: #262626;
    overflow: hidden;
}
.card .imgBx,
.card .details {
    width: 100%;
    height: 100%;
    position: absolute;
    box-sizing: border-box;
    transition: .5s;
}
.card .imgBx {
    top: 0;
    left: 0;
}
.card:hover .imgBx {
    top: 0;
    left: -100%;
}
.card .imgBx img {
    width: 100%;
}
.card .details {
    background: #262626;
    top: 0;
    left: 100%;
    padding: 60px 30px;
}
.card:hover .details {
    top: 0;
    left: 0%;
}
.card .details h2 {
    color: #fff;
    text-align: center;
    margin: 0;
    padding: 0 0 10px;
    border-bottom: 2px solid #fff;

}
.card .details p {
    margin: 20px 0 0;
    color: #fff;
}

</style>
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
            <a style="color:azure; font-family:Verdana;font-style: italic;">
                <center> Z'Fitness </center>
            </a>
    </div>
    <div class="card">
            <div class="imgBx">
                <img src="/img/90.jpg">
            </div>
            <div class="details">
                <h2>Qu'est ce que Z'Fitness</h2>
                <p>Z'FITNESS développe un concept de salle de Cours Videos interactifs (Fitness et Wellness) pour les établissements hôteliers, les centres de Remise en Forme, les Entreprises, les Campings Haut de Gamme.</p>
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