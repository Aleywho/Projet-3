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
<ul>
    <li class="nav-item">
        <a class="nav-link" href="index.php">Pages des articles</a>
    </li>

</ul>

<div class="container">

    <div class="starter-template">
        <h1>Ma page d'admin</h1>
        <p class="lead">En construction</p>
<h3>Ecrire un article</h3>

<form method='POST' action="../public/index.php?route=addArticle">

    <div class="form-group">
        <label for="title">Titre</label><br/>
        <input type="text" id="title" name="title"/>
    </div>
    <div>
        <label for="content">Articles</label><br/>
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <label for="author">Auteur</label><br/>
        <input type="text" id="author" name="author"/>

    </div>
    <button type="submit" class="btn btn-primary">Valider</button>


</form>
<a href="index.php">Retour à l'accueil</a>
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