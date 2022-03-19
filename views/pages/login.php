<section>
    <div class="formConnexion">
        <h2 class="title-connexion">Se connecter</h2>
        <form action="./controllers/loginFormController.php" method="GET">
            <input type="text" name="pseudo" placeholder="Votre pseudo" required/>
            <input type="password" name="password" placeholder="Mot de passe" required/><br>
            <button type="submit">Connexion</button>
        </form>
        <div class="Account">
            <p class="inscrivezvous">vous n'avez pas de compte?</p>
        <h6 class="inscrivezvous"><a href="?action=inscription">inscrivez vous !</a></h6>
        </div>
    </div>
</section>

