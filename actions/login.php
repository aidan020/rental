<?php
session_start();
require_once __DIR__ . "/../database/connection.php";

$select_user = $conn->prepare("SELECT * FROM account WHERE Email = :Email");
$select_user->bindParam(":Email", $_POST['Email']);
$select_user->execute();
$user = $select_user->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($_POST['password'], $user['password'])) {
    $_SESSION['Id'] = $user['Id'];
    $_SESSION['Email'] = $user['Email'];
    header('Location: /home');
    exit();
} else {
    $_SESSION['message'] = "Ongeldig e-mailadres of wachtwoord.";
    header('Location: /login-form');
    exit();
}
