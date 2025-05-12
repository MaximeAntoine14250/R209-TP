<?php

// Démarrage de la session
session_start();

// Si l'utilisateur n'est pas connecté, on le redirige vers index.php
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">Bonjour, <?= htmlspecialchars($_SESSION['user']) ?> !</h1>
    <a href="logout.php" class="btn btn-danger mt-3">Se déconnecter</a> 
    <!-- propose un bouton de déconnexion à l’utilisateur. "btn" applique le style de base d’un bouton Bootstrap,
    "btn-danger" : donne une apparence rouge au bouton, souvent utilisée pour des actions critiques comme la suppression ou la déconnexion,
    "mt-3" : applique une marge supérieure (margin-top) de 3 unités Bootstrap (environ 1rem)-->
</body>
</html>
