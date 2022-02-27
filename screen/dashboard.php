<?php
session_start();
if (isset($_GET['logout'])) {
    $_SESSION = array();
}
if (isset($_SESSION['role']) && $_SESSION['role'] != "admin" || empty($_SESSION)) {
    header("location:http://localhost/compteur_vue/screen/connexion.php");
}
require_once '../logic/authentification/connexiondb.php';
require_once '../logic/vues/total_vue.php';
require_once '../component/header.php';
?>
<section class="section dasboard">
    <div class="container">
        <?php require_once '../component/vertical_nav.php'; ?>
        <div class="all_vues">
            <h1>Nombre total de vues sur le site</h1>
            <div class="nbr_vue"><?= htmlentities($total_vue['total_vue']) ?></div>
        </div>
    </div>
</section>
<?php
require_once '../component/footer.php';
?>