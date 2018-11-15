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

<div class="container">

    <div class="starter-template">
        <h1>Ma page d'admin</h1>
<h2>Connexion</h2>

<form method='POST' action="index.php">

    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required/>

        <input type="submit" name="submit" value="submit" />

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