<h3>Ecrire un article</h3>
<?php


?>
<form method='POST' action="../public/index.php?route=addArticle">

    <div class="text-left">
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
    <input type="submit" name="submit"/>

</form>
<a href="index.php">Retour à l'accueil</a>