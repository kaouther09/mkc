<?php include_once ("<includ/header.php") ;?>

<main class="mimi">

    <div class="pagecnx">

        <form action="traitconx.php" method="POST">

            <h1>SE CONNECTER</h1>

            <div class="box">
                <label for="email"></label>
                <input type="text" name="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="box">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="remb">
                <label ><input type="checkbox">Enregistrer </label>
                <a href="#">Mot de passe oublié?</a>
            </div>
            <button type="submit" class="btn">SE CONNECTER</button>
            <div class="fifi">
                <p>Vous avez pas un compte?<a href="inscription.php">Créer un compte</a></p>
            </div>
        </form>
    </div>
    </main>

<?php include_once ("<includ/footer.php") ;?>
    </body>
    </html>
  