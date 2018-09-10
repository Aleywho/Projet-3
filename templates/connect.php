<h2>Connexion</h2>

<a href="index.php">Si vous n'êtes pas autorisé à vous connecter c'est ici que ça se passe. </a>
<form method='POST' action="../public/index.php?route=check">

    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required/>

        <input type="submit" name="submit" value="submit" />

    </div>
