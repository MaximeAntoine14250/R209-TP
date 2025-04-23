// Exercice 1 : Conversion Celsius → Fahrenheit
let celsius = 25; // Déclare la température en Celsius
let fahrenheit = celsius * 9/5 + 32; // Conversion en Fahrenheit
console.log(fahrenheit);

// Exercice 2 : Calcul de l'aire d'un rectangle
let longueur = 10; // Longueur du rectangle
let largeur = 5; // Largeur du rectangle
let aire = longueur * largeur; // Calcul de l'aire
console.log("L'aire du rectangle est de",{aire}," cm²");

// Exercice 3 : Concaténation prénom + nom
let prenom = "Maxime";
let nom = "Antoine";
let nomComplet = prenom + " " + nom; // Concaténation
console.log({nomComplet});

// Exercice 4 : Calcul du prix TTC
let montantHT = 100; // Montant hors taxe
const TVA = 0.20; // Taux de TVA 20%
let montantTVA = montantHT * TVA; // Calcul de la TVA
let montantTTC = montantHT + montantTVA; // Montant TTC
console.log("Montant HT : ",montantHT);
console.log("TVA : ",montantTVA);
console.log("Montant TTC :",montantTTC);

// Exercice 5 : Résultat de l'expression logique
let resultat = ((4 >= 6) || ("herbe" != "verte")) && !(((12 * 2) == 144) && true);
console.log(resultat); // false

// Exercice 6 : Calcul de l'IMC
let poids = 70; // Poids en kg
let taille = 1.75; // Taille en mètres
let imc = poids / (taille * taille); // Formule de l'IMC
console.log("IMC : ",imc.toFixed(2)); // Arrondi à 2 décimales

// Exercice 7 : Livraison gratuite ou frais de livraison
const montantMinLivraison = 50; // Montant minimum pour la livraison gratuite
let montantCommande = 40; // Montant total de la commande
if (montantCommande >= montantMinLivraison) {
    console.log("Livraison gratuite !");
} else {
    let fraisLivraison = 5; // Exemple de frais
    console.log("Frais de livraison :", fraisLivraison,"euros");
}

// Exercice 8 : Conversion d'un binaire en décimal
let binaire = "1010"; // Nombre binaire sous forme de string
let decimal = parseInt(binaire, 2); // Conversion en décimal
console.log("Binaire : ",binaire,"Décimal :",decimal);




