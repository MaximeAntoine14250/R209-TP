<?php
// Démarrage de la session
session_start();
// Destruction de la session : l'utilisateur est déconnecté
session_destroy();
// Redirection vers la page de connexion
header("Location: index.php");
exit;
