<?php
// Démarrage de la session
session_start();

// Inclusion du tableau des comptes utilisateurs
require("user.php");


// Récupération et protection des données envoyées par le formulaire
$pseudo = htmlspecialchars($_POST['pseudo'] ?? '');
// Le mot de passe ne nécessite pas htmlspecialchars
$password = $_POST['password'] ?? '';

// Vérification si le pseudo existe et si le mot de passe est correct
if (array_key_exists($pseudo, $comptesUtilisateurs) && password_verify($password, $comptesUtilisateurs[$pseudo])) {
    // Authentification réussie : on enregistre l'utilisateur en session
    $_SESSION['user'] = $pseudo;
    // Message de bienvenue
    echo "<h1 class='text-success'>Bienvenue, " . htmlspecialchars($pseudo) . " !</h1>";
    // Redirection automatique vers home.php après 3 secondes
    echo "<script>setTimeout(function(){ window.location.href = 'home.php'; }, 3000);</script>";
} else {
    // Authentification échouée : pseudo inexistant ou mauvais mot de passe
    echo "<h1 class='text-danger'>Erreur : identifiants incorrects</h1>";
    // Redirection vers index.php après 5 secondes
    echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 5000);</script>";
}
?>

<!-- Inclusion de Bootstrap pour styliser la page -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
