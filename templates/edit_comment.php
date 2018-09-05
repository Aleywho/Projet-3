<?php

?>



<h2>Editer le commentaire</h2>

<form method='POST' action="../public/index.php?route=editComment&id=<?=$_GET['id'];?>">
    <div class="text-left">
    <div>
        <label for="newContent">Nouveau commentaire</label><br/>
        <textarea id="newContent" name="newContent"></textarea>
    </div>
    <input type="submit" name="submit"/>
<a href="index.php?route=article&id=<?=$_GET['id'];?>">Retour à l'article</a>