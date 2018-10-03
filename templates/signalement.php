<h2>Signaler le commentaire</h2>

<form method='POST' action="../public/index.php?route=signalement&id=<?=$_GET['id'];?>">
    <div class="text-left"> <label for="title">Voulez vous signaler?</label><br/>

        <label for="signalContent">Pourquoi un signalement?</label><br/>
        <textarea id="signalContent" name="signalContent"></textarea>

    <input type="submit" name="submit"/>
    <a href="index.php?route=admin">Retour à la page d'admin</a>
