<?php
session_start();
require_once '../logic/connexiondb.php';
require_once '../logic/authentification.php';
require_once '../component/header.php';
?>
<section class="section">
    <div class="container">
        <form class='form' method='POST'>
            <h2>Connexion</h2>
            <div class="input <?= $error ? 'input_error' : '' ?>">
                <input type="text" name="login" placeholder="Identifiant">
                <span class="material-icons">
                    person
                </span>
            </div>
            <div class="input <?= $error ? 'input_error' : '' ?>">
                <input type="password" name="password" placeholder="Mot de passe">
                <span class="material-icons">
                    lock_open
                </span>
            </div>
            <?php if ($success) : ?>
                <small class='success'><?= $success ?></small>
            <?php endif ?>
            <?php if ($error) : ?>
                <small class='error'><?= $error ?></small>
            <?php endif ?>
            <button class='button' name='submit'>
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