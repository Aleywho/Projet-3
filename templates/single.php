<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mon super blog">
    <meta name="author" content="Alexandre">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mon blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../public/css/starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Mon blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item">
                <a class="nav-link" href="index.php?route=connectMember">Se connecter</a>

                <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Mon blog</h1>
        <p class="lead">En construction</p>

        <?php

    $data = $articles->fetch();
?>
        <div class="text-left">
            <a href="index.php?route=deleteArticle&id<?=$_GET['id'];?>">supprimer</a>
            <h2><?= $data['title'];?></h2>
            <a href="index.php?route=editArticle&id=<?=$_GET['id'];?>">Modifier</a>
            <p><?= $data['content'];?></p>
            <p><?= $data['author'];?></p>
            <p>Créé le <?= $data['date_added'];?></p>
        </div>
        <a href="index.php">Retour à l'accueil</a>
        <div id="comments" class="text-left" style="margin-left: 50px">

            <h3>Poster votre commentaire</h3>


<form method='POST' action="../public/index.php?route=addComment&id=<?=$_GET['id'];?>">

            <div class="text-left">
                <label for="author">Auteur</label><br/>
                <input type="text" id="author" name="pseudo"/>
            </div>
            <div>
                <label for="content">Commentaire</label><br/>
                <textarea id="content" name="content"></textarea>
            </div>
            <div>
                <input type="submit"/>
            </div>
            </form>



        <h3>Commentaires</h3>


            <?php


            while($datas = $comments->fetch())
            {
            ?>

            <h4><?= $datas['pseudo']; ?></h4> <a href="index.php?route=editComment&id=<?=$_GET['id'];?>">Modifier</a>

            <p><?= $datas['content']; ?></p>
                <p>Posté le <?= $datas['date_added']; ?></p>

        <?php
        }
        $comments->closeCursor();
        ?>


        </div>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>