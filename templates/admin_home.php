<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mon super blog">
    <meta name="author" content="Alexandre">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mon blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">    <!-- Custom styles for this template -->
    <link href="../public/css/starter-template.css" rel="stylesheet">
</head>

<body>

<div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="index.php?route=admin" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Page des articles</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Signalement</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
    </div>
</div>

<div class="container">

    <div class="starter-template">
        <h1>Ma page d'admin</h1>
        <p class="lead">En construction</p>


        <h2>Administrer les articles</h2>
<br>


            <a href="index.php?route=addArticle">Pour ajouter un article </a>

        <?php
        while( $data = $articles->fetch())
        {
            ?>

            <div class="text-left">

                <div class="text-left">


                    <h2><a href="index.php?route=article&id=<?= $data['id'];?>"><?= $data['title'];?></a></h2> <a class="btn btn-primary" href="index.php?route=editArticle&id=<?= $data['id'];?>">Modifier</a> <a class="btn btn-primary" href="index.php?route=deleteArticle&id=<?= $data['id'];?>">Supprimer</a>
                    <p><?= $data['content'];?></p>
                    <p><?= $data['author'];?></p>
                    <p>Créé le <?= $data['date_added'];?></p>

            </div>
            <br>
            <?php
        }

        $articles->closeCursor();
        ?>
<?php

?>