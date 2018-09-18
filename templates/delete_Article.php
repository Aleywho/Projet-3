<h2>Supprimer l'article</h2>
<?php

?>
<form method='POST' action="../public/index.php?route=deleteArticle&id=<?=$_GET['id'];?>">

<input type="submit" name="submit"/>
<a href="index.php?route=admin">Retour à la page d'admin</a>
