<?php require('header.php'); ?>


<h1>S'inscrire</h1>

<form action="../public/index.php?route=addMember" method="POST">

    <div class="form-group">
        <label for="">Pseudo</label>
        <input type="text" name="pseudo" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" required/>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required/>

            <button type="Submit" name="submit" class="btn btn-primary btn-lg">Valider</button>

            <br>
            <a href="index.php">Retour à l'accueil</a>
            <br>
            <a href="index.php?route=connect">Déjà connecté? </a>
        </div>
    </div>
    <?php require('footer.php'); ?>
