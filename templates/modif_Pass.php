<h2>Modifier Password</h2>

<form method='POST' action="../public/index.php?route=modifierPass">
    <div class="text-left">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" required />
        </div>

            <div class="form-group">
                <label for="newpassword">Password</label>
                <input type="password" name="newpassword" class="form-control" required/>

                <input type="submit" name="submit"/>
        <a href="index.php?route=admin">Retour à la page d'admin</a>