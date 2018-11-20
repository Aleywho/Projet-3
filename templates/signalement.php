<?php require('header.php'); ?>
<h2>Signalement d'un commentaire</h2>

<form method='POST' action="../public/index.php?route=signalement&id=<?=$_GET['id'];?>">
    <div class="text-left"> <label for="title">Voulez vous signaler?</label><br/>

    <input type="submit" name="submit"/>
    <a href="index.php?route=admin">Retour à la page d'admin</a>
<?php require('footer.php'); ?>