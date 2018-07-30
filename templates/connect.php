<h2>Connexion</h2>

<form method='POST' action="../public/index.php?route=connectMember">

    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="passhash">Password</label>
        <input type="password" name="passhash" id="passhash" class="form-control" required/>

        <input type="submit" name="submit"/>

    </div>
