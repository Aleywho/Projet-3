<h2>Supprimer l'article</h2>
<?php

?>
<form method='POST' action="../public/index.php?route=deleteArticle&id=<?=$_GET['id'];?>">

<input type="submit" name="delete"/>
<a href="index.php">Retour à l'accueil</a>
