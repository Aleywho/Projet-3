<h2>Modifier Password</h2>

<form method='POST' action="../public/index.php?route=modifierPass">
    <div class="text-left">
        <div>
            <label for="password">Nouveau mot de passe</label><br/>
            <textarea id="password" name="password"></textarea>
        </div>
        <input type="submit" name="submit"/>
        <a href="index.php?route=admin">Retour à l'article</a>