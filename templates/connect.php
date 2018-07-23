<?php

?>
<h1>Se connecter</h1>

    <form action="../public/index.php?route=connectMember" method="POST">

        <div class="form-group">
            <label for="">Pseudo</label>
            <input type="pseudo" name="pseudo" class="form-control" required />
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required />

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" required/>

                <button type="Submit" name="submit"class="btn btn-primary"></button>

                <a href="index.php">Retour à l'accueil</a>

            </div>
        </div>