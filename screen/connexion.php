<?php
require_once '../component/header.php';
?>
<section class="section">
    <div class="container">
        <form class='form'>
            <h2>Connexion</h2>
            <div class="input">
                <input type="text" placeholder="Identifiant">
                <span class="material-icons">
                    person
                </span>
            </div>
            <div class="input">
                <input type="password" placeholder="Mot de passe">
                <span class="material-icons" minlength="4" maxlength="8">
                    lock_open
                </span>
            </div>
            <small>Une erreur est survenue. Veuillez rééssayer.</small>
            <button class='button'>
                <p>Se connecter</p>
                <span class="material-icons">
                    login
                </span>
            </button>
        </form>
    </div>
</section>
<?php
require_once '../component/footer.php';
?>