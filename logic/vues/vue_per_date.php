<?php
if (isset($_GET['annee']) && empty($_GET['mois'])) {
    $an = $_GET['annee'];
    try {
        $query = "SELECT SUM(nbr_vue) as vues FROM vues WHERE `date` LIKE CONCAT(:an,'-%%-%%')";
        $stmt = $connection->prepare($query);
        $stmt->bindValue('an', $an, PDO::PARAM_STR);
        $stmt->execute();
        $vues = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_GET['annee']) && isset($_GET['mois'])) {
    $an = $_GET['annee'];
    $moi = $_GET['mois'];
    try {
        $query = "SELECT SUM(nbr_vue) as vues FROM vues WHERE `date` LIKE CONCAT(:an, '-', :moi,'-%%')";
        $stmt = $connection->prepare($query);
        $stmt->bindValue('an', $an, PDO::PARAM_STR);
        $stmt->bindValue('moi', $moi, PDO::PARAM_STR);
        $stmt->execute();
        $vues = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
