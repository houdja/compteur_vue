<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("http://localhost/compteur_vue/screen/connexion.php");
}
require_once '../component/header.php';
?>
<section class="section dasboard">
    <div class="container">
        <p>Bienvenue <?= $_SESSION['login'] ?></p>
    </div>
</section>
<?php
require_once '../component/footer.php';
?>