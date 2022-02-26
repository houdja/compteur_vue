<?php
$error = '';
$success = '';
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login != '' && $password != '') {
        try {
            $query = 'SELECT * FROM users WHERE `login` = :login && `password` = :password && role = "admin"';
            $stmt = $connection->prepare($query);
            $stmt->bindValue('login', $login, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user === false) {
                $error = 'Mauvais identifiants. Veuillez rééssayer.';
            } else {
                $success = 'Connexion réussi. Redirection dans 5 secondes';
                $_SESSION['role'] = $user['role'];
                $_SESSION['login'] = $user['login'];
                $_SESSION['password'] = $user['password'];
                header("refresh:5;http://localhost/compteur_vue/screen/dashboard.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        $error = 'Veuillez remplir les champs';
    }
}
