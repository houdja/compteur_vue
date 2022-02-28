<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] != "admin" || empty($_SESSION)) {
    header("location:http://localhost/compteur_vue/screen/connexion.php");
}
$annee = (int)date("Y");
$annee_selection = empty($_GET['annee']) ? $annee : $_GET['annee'];
$mois_selection = empty($_GET['mois']) ? date('m') : $_GET['mois'];
$months = [
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Aout',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre',
];
require_once '../logic/authentification/connexiondb.php';
require_once '../logic/vues/vue_per_date.php';
require_once '../component/header.php';
?>
<section class="section details_vue">
    <div class="container">
        <?php require_once '../component/vertical_nav.php'; ?>
        <div class="stats">
            <div class="display-vue">
                <h1>Selectioné une date</h1>
                <p><?= isset($_GET['annee']) ? 'Pour l\'année ' . $_GET['annee'] : '' ?> <?= isset($_GET['mois']) ? 'au mois de  ' . $months[$_GET['mois']] : '' ?></p>

                <?php if (isset($_GET['annee'])) : ?>
                    <div class="vue"><?= isset($vues) && $vues['vues']  > 0 && $vues != null ? $vues['vues'] . ' vues' : 'aucune vue' ?></div>
                <?php endif; ?>

            </div>
            <div class="contain-date">
                <div class="dates">
                    <div class="months">
                        <?php for ($i = $annee; $i >= $annee - 3; $i--) :  ?>
                            <a href="http://localhost/compteur_vue/screen/details_vue.php?annee=<?= $i ?>" class='annee'><?php echo $i; ?></a>
                            <?php if (isset($_GET['annee']) && $annee_selection == $i) : ?>
                                <?php foreach ($months as $numero => $month) : ?>
                                    <a href="http://localhost/compteur_vue/screen/details_vue.php?annee=<?= $annee_selection ?>&mois=<?= $numero ?>" class='mois'><?php echo $month; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once '../component/footer.php';
?>