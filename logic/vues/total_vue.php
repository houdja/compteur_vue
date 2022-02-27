<?php
try {
    $query = 'SELECT SUM(nbr_vue) as total_vue FROM vues';
    $stmt = $connection->query($query);
    $total_vue = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
