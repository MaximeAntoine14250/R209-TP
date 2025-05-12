<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">Connexion</h1>
    <?php include("formulaire.php"); ?>
</body>
</html>

