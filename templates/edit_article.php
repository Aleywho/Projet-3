
<h2>Editer l'article</h2>

<form method='POST' action="../public/index.php?route=editArticle&id=<?=$_GET['id'];?>">
    <div class="text-left">
        <label for="content">Nouvel article</label><br/>
        <textarea id="content" name="content"></textarea>
    </div>

    <input type="submit" name="submit"/>
<a href="index.php">Retour à l'article</a>