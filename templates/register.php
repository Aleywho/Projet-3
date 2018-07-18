<?php


    ?>




    <h1>S'inscrire</h1>

    <form action="./admin_page.php" method="POST">

        <div class="form-group">
            <label for="">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" required />
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required />

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="Password" class="form-control" required/>

                <button type="Submit" class="btn btn-primary"></button>

                <ul><a href="index.php">Retour à l'accueil</a></ul>
            </div>
        </div>