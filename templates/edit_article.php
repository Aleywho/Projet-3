<?php require('header.php'); ?>

<h2>Editer l'article</h2>

<form method='POST' action="../public/index.php?route=editArticle&id=<?= $_GET['id']; ?>">
    <div class="form-group">
        <label for="title">Titre</label><br/>
        <input type="text" id="title" name="title"/>
    </div>
    <div class="form-group">
        <label for="content">Nouvel article</label><br/>
        <textarea id="content" name="content"></textarea>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Valider</button>
</form>
<a href="index.php?route=article&id=<?= $_GET['id']; ?>">Retour à la page d'admin</a>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>

<?php require('footer.php'); ?>
