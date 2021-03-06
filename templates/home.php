<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mon super blog">
    <meta name="author" content="Alexandre">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mon blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          crossorigin="anonymous">    <!-- Custom styles for this template -->
    <link href="../public/css/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Mon blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Articles</a>
            <li class="nav-item">
                <a class="nav-link" href="index.php?route=register">S'inscrire</a>
                <?php
                if ((isset($_SESSION['pseudo'])) && ($_SESSION['pseudo'] != ''))
                {
                ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?route=deconnect">Se déconnecter</a>
                <?php
                }
                ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?route=admin">Ma page d'admin</a>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Billet simple pour l'Alaska</h1>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../public/image/alaska%20(1).jpg" width="1400" height="400"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                         src="../public/image/1433-les-aurores-boreales-strient-le-ciel-1200x650-1.jpg" width="1200"
                         height="400" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../public/image/80472fa866c28387f301ceaf0a42080e-alaska.jpg"
                         width="1200" height="400" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h2>Mes Articles</h2>
        <?php
        if (isset($_SESSION['pseudo'])) {

            ?>
            <a href="index.php?route=addArticle">Pour ajouter un article </a>
            <?php
        }
        ?>
        <?php
        while ($data = $articles->fetch()) {
            ?>

            <div class="text-left">
                <h2><a href="index.php?route=article&id=<?= $data['id']; ?>"><?= $data['title']; ?></a></h2>
                <p><?= $data['content']; ?></p>
                <p><?= $data['author']; ?></p>
                <p>Créé le <?= $data['date_added']; ?></p>
            </div>
            <br>
            <?php
        }

        $articles->closeCursor();
        ?>
        <?php

        ?>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
