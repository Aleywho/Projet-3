<?php require('header.php'); ?>

<h2>retirer le signalement du commentaire</h2>

<form method='POST' action="../public/index.php?route=deSignal&id=<?= $_GET['id']; ?>">
    <div class="form-group"><label for="title">Ce contenu ne me parait pas offensant</label><br/>

        <input type="submit" name="submit"/>
        <a href="index.php?route=admin">Retour à la page d'admin</a>

        <?php require('footer.php'); ?>
