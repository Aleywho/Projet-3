
<h2>Editer l'article</h2>

<form method='POST' action="../public/index.php?route=editArticle&id=<?=$_GET['id'];?>">
    <div class="text-left"> <label for="title">Titre</label><br/>
        <input type="text" id="title" name="title"/>
    </div>

        <label for="content">Nouvel article</label><br/>
        <textarea id="content" name="content"></textarea>

    <input type="submit" name="submit"/>
<a href="index.php?route=article&id=<?=$_GET['id'];?>">Retour à l'article</a>