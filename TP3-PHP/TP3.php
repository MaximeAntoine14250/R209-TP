<?php

//Une chaîne de caractères
echo 'bonjour';
echo "\n";

// Une variable contenant un entier
$var = 1;
echo "$var";
echo "\n";

//Une chaîne de caractères faisant apparaître une variable (dont on veut connaître le contenu)
$var = 'maxime';
echo 'bonjour je suis'," ", ${'var'};
echo "\n";

//Un texte différent selon qu'une condition est vraie ou fausse
$val1 = 30;
$val2 = 20;

if ($val1 > $val2)
    echo "a est plus grand que b";
echo "\n";
//Produire l'affichage des entiers de 1 à 10 à l'aide d'une boucle while

$i = 1;

while ($i<=10)
{
    echo $i;
    $i ++;
}
echo "\n";

// Idem avec une boucle for
for($i=1;$i<=10;$i++)
{
 echo "$i";
}
echo "\n";

//Placer cette boucle dans une procédure et y faire appel
function bouvclede10()
{
    $result = "";
    for($i=1;$i<=10;$i++)
    {
    $result = $result."$i";
    } 
    return $result;
}

$resultat_boucle_10 = bouvclede10();
echo "resulat de la fonction: $resultat_boucle_10";
echo "\n";

//Modifier la procédure pour pouvoir compter de 1 à un entier quelconque.

function bouvcledeentier($entier)
{
    $result = "";
    for($i=1;$i<=$entier;$i++)
    {
    $result = $result."$i";
    } 
    return $result;
}

$resultat_boucle_entier = bouvcledeentier(20);
echo "resulat de la fonction: $resultat_boucle_entier";
echo "\n";

//Réaliser des figures géométriques
//Écrire une boucle qui produit une ligne horizontale de 8 étoiles.


$resultat="";
for($i=1; $i<=8; $i ++)
{
    $resultat =  $resultat."*";
}
//echo $resultat;

//Imbriquer ce code dans une nouvelle boucle pour produire un carré de 8 lignes horizontales, chacune contenant 8 étoiles.
$resultat_final = "";
for($i = 1; $i <= 8; $i++)
{
    $resultat ="";
    for($j = 1; $j <= 8; $j ++)
    {
    $resultat =  $resultat."*";
    }
    $resultat_final = $resultat_final.  $resultat."\n";

}
echo $resultat_final;

//Écrire des fonctions PHP qui

//Tableau 
$notes = [12, 15, 8, 19, 6, 17, 10, 14, 9, 20];

// Fonction pour afficher tous les éléments du tableau
function afficherTableau($tableau) {
    echo "Contenu du tableau : ";
    foreach ($tableau as $note) {
        echo $note . " ";
    }
    echo "\n";
}

afficherTableau($notes);

//array_sum($tab) : somme des vals du tableau


// Fonction pour calculer la moyenne
function calculerMoyenne2($tableau) {
    $somme = 0;
    $resultat = 0;

    if (count($tableau) === 0) return 0;

    foreach ($tableau as $note) {
        $somme =  $somme + $note;
    }

    return $somme / count($tableau);
}

echo calculerMoyenne2($notes);

// Fonction pour compter les notes >= 10
function compterNotesSuperieuresOuEgales10($tableau) {
    $compteur = 0;
    foreach ($tableau as $note) {
        if ($note >= 10) {
            $compteur++;
        }
    }
    return $compteur;
}

// 4. Fonction pour tester si la note 20 est présente
function contientNote20($tableau) {
    return in_array(20, $tableau);
}


//Fonction pour déterminer la meilleure note
function meilleureNote($tableau) {
    $max = 0;
    if (count($tableau) === 0) return null;
    foreach ($tableau as $note) {
        if ($note >= $max) {
            $max = $note;
        }
    }
    return $max;
}

echo "la note max ets : ", meilleureNote($notes)

?>

