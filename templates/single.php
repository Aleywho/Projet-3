<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mon super blog">
    <meta name="author" content="Karim">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mon blog</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Articles</a>
            </li>
        </ul>
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

    $article = new \App\src\DAO\ArticleDAO();
    $articles = $article->getArticle($_GET['id']);
    $data = $articles->fetch();
?>
        <div class="text-left">
            <h2><?= $data['title'];?></h2>
            <p><?= $data['content'];?></p>
            <p><?= $data['author'];?></p>
            <p>Créé le <?= $data['date_added'];?></p>
        </div>
        <a href="index.php">Retour à l'accueil</a>
        <div id="comments" class="text-left" style="margin-left: 50px">
            <h3>Commentaires</h3>


            <?php
            $articles->closeCursor();
            $comment = new\App\src\DAO\CommentDAO();
            $comments = $comment->getCommentsFromArticle($_GET['id']);
            while($datas = $comments->fetch())
            {
                ?>
                </div>
                <div class="text-left">
                <h4><?= $datas['pseudo'];?></h4>
                <p><?= $datas['content'];?></p>
                <p>Posté le <?= $datas['date_added'];?></p>
            <?php
            $Post = new \App\src\DAO\PostDAO();
            $Posts = $Post->getPosts($_GET['id']);
        $data = $Posts->fetch()

                ?>

        <div class="text-left">
            <div id="comments" class="text-left" style="margin-left: 50px">

            <label for="author">Auteur</label><br/>
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br/>
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
        </form>
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