<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mon super blog">
    <meta name="author" content="Alexandre">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mon blog</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../public/css/starter-template.css" rel="stylesheet">
</head>

<body>
<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link active" href="index.php?route=admin">Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php">Pages des articles</a>
    </li>

</ul>

<div class="container">

    <div class="starter-template">
        <h1>Ma page d'admin</h1>
        <p class="lead">En construction</p>


        <h2>Administrer les articles</h2>


        <a href="index.php?route=addArticle">Pour ajouter un article </a>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="articles-tab" data-toggle="tab" href="#articles" role="tab"
                   aria-controls="articles" aria-selected="true">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="comments-tab" data-toggle="tab" href="#comments" role="tab"
                   aria-controls="comments" aria-selected="false">Commentaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member"
                   aria-selected="false">Utilisateur</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titres</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($data = $articles->fetch()) {
                        ?>
                        <tr>
                            <th scope="row"><?= $data['id'] ?></th>
                            <td> <?= $data['title'] ?></td>
                            <td><a href="index.php?route=editArticle&id=<?= $data['id']; ?>">Modifier</a></td>
                            <td><a href="index.php?route=deleteArticleCom&id=<?=$data['id'];?>">Supprimer</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Commentaires</th>
                        <th scope="col">Date d'ajout</th>
                        <th scope="col">Signalé</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($data = $result = $comments->fetch()) {
                        ?>
                        <tr>
                            <th scope="row"><?= $data['pseudo']; ?></th>
                            <td> <?= $data['content']; ?></td>
                            <td> Posté le <?= $data['date_added']; ?></td>
                            <td> Signalement: <?= $data['signalement']; ?></td>
                            <td><a href="index.php?route=SupprCom&id=<?=$data['id'];?>">Supprimer</a></td>
                            <td><a href="index.php?route=deSignal&id=<?= $data['id']; ?>">Enlever le signalement après modifications, ou vérifications.</a></td>


                        </tr>

                        <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mot de passe</th>
                        <th scope="col">Modifier le mot de passe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><?= $_SESSION['pseudo']; ?></th>
                        <td> <?= $_SESSION['email']; ?></td>
                        <td> <?= $_SESSION['password']; ?></td>
                        <td><a href="index.php?route=modifierPass">Modifier mot de passe</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                    crossorigin="anonymous"></script>
</body>
</html>