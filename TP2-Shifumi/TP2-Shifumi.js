// Initalisation varibles

let resultat = document.getElementById('result');
const bouttons = document.querySelectorAll("button");

let manches_jouées = 0;
let défaites_joueur = 0;
let nb_victoires_joueur = 0;
let victoires_joueur = "";
let choix_joueur = "";
let choix_ordi = "";


for (let i = 0; i < bouttons.length; i++) {

    // i vas prendre les valeur 0,1 et 2, a chaque click sur le boutton
    bouttons[i].addEventListener('click', () => {
        // Math.random() renvoie un nombre flottant aléatoire compris entre 0 (inclus) et 1 (exclus).
        // Il est ensuite multiplié par la longeur du tableau "choix" (3)
        // Math.floor() prend un nombre flottant et l'arrondie à l'entier inférieur le plus proche.
        // Math.floor() donne comme resulat 0,1 ou 2 ce qui correspond à pierre, feuille ou ciseaux
        choix_ordi = bouttons[Math.floor(Math.random()* bouttons.length)].textContent;

        // Recupére avec textContent, le texte dans le boutton (Pierre, feuille, cisaux)
        choix_joueur = bouttons[i].textContent

        //alert(bouttons[i].textContent)

        // Test si le joueur et l'ordinateur on fais le meme choix
        // === compare les valeurs des deux varaiables et leur type pour ne pas faire de faute
        if (choix_joueur === choix_ordi) 
        {
            victoires_joueur = "Egalité !";
        }

        // Test quand le joeur est gagant
        // || "OU logique", combine les différentes conditions pour savoir si le joueur à gagner 
        else if (
            (choix_joueur === 'Pierre' && choix_ordi === "Ciseaux") ||
            (choix_joueur === 'Feuille' && choix_ordi === "Pierre") ||
            (choix_joueur === "Ciseaux" && choix_ordi === "Feuille")         
        ) 
        {
            victoires_joueur = "Gagner !";
            // Le joueur a donc une victoire de plus
            nb_victoires_joueur++;
    
        }
        else 
        {
            victoires_joueur = "Perdue";
            // Le joueur a donc une victoire de moins
            
        }
        
        // Incrementer le nombre de manche jouée
        manches_jouées++;

        // Mise a jour du html avec les resultats
        resultat.innerHTML = `J'ai joué : ${choix_joueur} <br> Le robot a joué : ${choix_ordi} <br> c'est une <strong>${victoires_joueur}</strong> <br> Vous avez joué : ${manches_jouées} partie <br> Vous avez gagné : ${nb_victoires_joueur} parties`;
    })
}
     