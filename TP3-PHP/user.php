<?php
// Tableau associatif contenant les utilisateurs et leurs mots de passe (hachés)
$comptesUtilisateurs = array(
    "user01" => password_hash("mdp01", PASSWORD_DEFAULT),
    "toto" => password_hash("tata", PASSWORD_DEFAULT),
    "cricri" => password_hash("motdepasse", PASSWORD_DEFAULT),
    "user02" => password_hash("mdp02", PASSWORD_DEFAULT),
    "admin" => password_hash("nimda", PASSWORD_DEFAULT)
);
 
// password_hash() permet de crypté le tableau
?>
