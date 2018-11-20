<?php require('header.php'); ?>

        <br>
        <h2>Voulez vous supprimer ce commentaire?</h2>
        <br>

<form method='POST' action="../public/index.php?route=SupprCom&id=<?=$_GET['id'];?>">

    <input type="submit" name="submit"/>
    <a href="index.php?route=admin">Retour à la page d'admin</a>
<?php require('footer.php'); ?>