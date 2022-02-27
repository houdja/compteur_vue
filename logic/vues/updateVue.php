<?php
//recharger la page
//si pas la date d'aujourd'hui créer la ligne et mettre la valeur de nbr_vue à 1
//recupérer le nbr de vue actuel d'aujourd'hui
//sinon incrementer le nbr de vue d'aujourd'hui

$today = date("Y-m-d");
try {
    $todayVue = 'SELECT nbr_vue FROM vues WHERE date = :today';
    $stmt = $connection->prepare($todayVue);
    $stmt->bindValue('today', $today, PDO::PARAM_STR);
    $stmt->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
    $first_vue = 1;
    try {
        $query = 'INSERT INTO vues (`date`, `nbr_vue`) VALUES (:today, :first_vue)';
        $stmt = $connection->prepare($query);
        $stmt->bindValue('today', $today, PDO::PARAM_STR);
        $stmt->bindValue('first_vue', $first_vue, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    try {
        $newValue = $row['nbr_vue'] + 1;
        $query = 'UPDATE vues SET nbr_vue = :newValue WHERE date = :today';
        $stmt = $connection->prepare($query);
        $stmt->bindValue('today', $today, PDO::PARAM_STR);
        $stmt->bindValue('newValue', $newValue, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
