<?php require('header.php'); ?>

<h2>Supprimer l'article</h2>
<form method='POST' action="../public/index.php?route=deleteArticle&id=<?= $_GET['id']; ?>">

    <input type="submit" name="submit"/>
    <a href="index.php?route=admin">Retour à la page d'admin</a>
    <?php require('footer.php'); ?>
