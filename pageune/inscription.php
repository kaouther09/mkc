
<?php include_once ("<includ/header.php") ;?>
    
    
    
    
        <main >
        

        <form class="conx" action="traitment.php" method="POST" onsubmit="return validateForm()">
            <h1>Créer votre compte</h1>

            <label for="nom">Nom</label>
            <input class="box" type="text" name="nom" pattern="[/^[A-Za-zÀ-ÿ0-9' ,.-]{1,255}$/]"> 

            <label for="prenom">Prénom</label>
            <input class="box" type="text" name="prenom" pattern="[/^[A-Za-z0-9\x{00c0}-\x{00ff}]{5,20}$/u]">

            <label for="email">Email</label>
            <input class="box" type="email" name="email">

            <label for="mdp">Mot de passe</label>
            <input class="box" type="password" name="mdp" required pattern="[A-Za-z0-9_$]{8,}" id="password">

            
            <label for="confirm_mdp">Confirmer votre mot de passe</label>
            <input class="box" type="password" name="confirm_mdp" required pattern="[A-Za-z0-9_$]{8,}"  id="confirm_password">

            <label for="adresse">Adresse</label>
            <input class="box" type="text" name="adresse">

            <label for="codepostal">Code postal</label>
            <input class="box" type="number" name="codepostal">

            <label for="ville">Ville</label>
            <input class="box" type="text" name="ville">

            <button type="submit" class="contact-btn">se connecter</button>
            
            </form>




    </main>

<?php include_once ("<includ/footer.php") ;?>
    </body>
    </html>