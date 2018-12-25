<?php require('header.php'); ?>
<h3>Ecrire un article</h3>

<form method='POST' action="../public/index.php?route=addArticle">

    <div class="form-group">
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
    <button type="submit" name="submit" class="btn btn-primary">Valider</button>


</form>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
<?php require('footer.php'); ?>
