<?php
session_start();
require("user.php");

$pseudo = htmlspecialchars($_POST['pseudo'] ?? '');
$password = $_POST['password'] ?? '';

if (array_key_exists($pseudo, $comptesUtilisateurs) && password_verify($password, $comptesUtilisateurs[$pseudo])) {
    $_SESSION['user'] = $pseudo;
    echo "<h1 class='text-success'>Bienvenue, " . htmlspecialchars($pseudo) . " !</h1>";
    echo "<script>setTimeout(function(){ window.location.href = 'home.php'; }, 3000);</script>";
} else {
    echo "<h1 class='text-danger'>Erreur : identifiants incorrects</h1>";
    echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 5000);</script>";
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
