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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Custom styles for this template -->
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


        <?php


        $data = $articles->fetch();
        {


        ?>
        <?php
        if (isset($_SESSION['pseudo'])) {


            ?>
            <a href="index.php?route=editArticle&id=<?= $_GET['id']; ?>">Modifier</a>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['pseudo'])) {

            ?>
            <a href="index.php?route=deleteArticle&id=<?= $_GET['id']; ?>">Supprimer</a>
            <?php
        }
        ?>
        <div class="text-left">
            <h2><?= $data['title']; ?></h2>
            <p><?= $data['content']; ?></p>
            <p><?= $data['author']; ?></p>
            <p>Créé le <?= $data['date_added']; ?></p>

            <?php
            }
            ?>

            <h2>Commentaires</h2>

            <form method='POST' action="../public/index.php?route=addComment&id=<?= $_GET['id']; ?>">
                <div>
                    <label for="pseudo">Auteur</label><br/>
                    <input type="text" id="pseudo" name="pseudo"/>
                </div>
                <div>
                    <label for="content">Commentaire</label><br/>
                    <textarea id="content" name="content"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit"/>
                </div>
            </form>
            <?php


            while ($datas = $comments->fetch()) {
                ?>

                <h4><?= $datas['pseudo']; ?></h4>
                <p><?= $datas['content']; ?></p>
                <p>Posté le <?= $datas['date_added']; ?></p>
                <a href="index.php?route=signalement&id=<?= $datas['id']; ?>">Signaler</a>
                <?php
                if (isset($_SESSION['pseudo'])) {

                    ?>

                    <a href="index.php?route=SupprCom&id=<?= $datas['id']; ?>">Supprimer</a>

                    <?php
                }
                ?>


                <?php
            }
            ?>


        </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>