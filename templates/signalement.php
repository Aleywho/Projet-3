<h2>Signaler le commentaire</h2>

<form method='POST' action="../public/index.php?route=signalement&id=<?=$_GET['id'];?>">
    <div class="text-left"> <label for="title">Voulez vous signaler</label><br/>

    <input type="submit" name="submit"/>
    <a href="index.php?route=article&id=<?=$_GET['id'];?>">Retour à l'article</a>

