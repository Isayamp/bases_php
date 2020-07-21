<?php

# VARIABLES
# BOOLEANS
# ARITHMETICS OPERATORS
# CONDITIONS
# ARRAY
# FUNCTIONS
# POO


# VARIABLES

$prix_unitaire = 228;      // Déclaration et initialisation de variable
$nombre = 5;



# BOOLEANS

if ($nombre > 0 AND $prix_unitaire != 0) {  // On teste que nombre est bien supérieur à 0 et le prix unitaire est différent de O pour savoir s'il a un achat ou pas en utilisant un opérateur logique AND
    $achat = TRUE;
    echo 'Il y a un achat !' . '<br/><br/><br/>';
} else {
    $achat = FALSE;
    echo 'Pas d\'a un achat !' . '<br/><br/><br/>';
}


# ARITHMETICS OPERATORS

$a = 35.6;      // Déclaration et initialisations des variables
$b = 2;
$c = 0;

// Addition
$c = $a + $b;      // On additionne a et b et on stock le resultat dans c
echo "{$a} + {$b} = {$c} <br/>";  // Affichage du resultat

// Soustraction
$c = $a - $b;      // On fait la soustraction de a et b et on stock le resultat dans c
echo "{$a} - {$b} = {$c} <br/>";  // Affichage du resultat

// Multiplication
$c = $a * $b;      // On fait la multiblication de a et b et on stock le resultat dans c
echo "{$a} x {$b} = {$c} <br/>";  // Affichage du resultat

// Division
$c = $a / $b;      // On fait la division de a et b et on stock le resultat dans c
echo "{$a} : {$b} = {$c} <br/>";  // Affichage du resultat

// Modulo
$c = $a % $b;      // On cherche le reste de la division de a et b et on stock le resultat dans c
echo "{$a} % {$b} = {$c} <br/>";  // Affichage du resultat

// Exponentielle
$c = $a ** $b;      // On élève a à la puissance de b et on stock le resultat dans c
echo "{$a} ^ {$b} = {$c} <br/><br/><br/>";  // Affichage du resultat



# CONDITIONS (CONTROLS)

$i = 0;

if ($nombre == 0) {     // On vérifie aec l'opérateur de comparaison que nombre égale 0
    echo "Aucun article acheté ! <br><br/>";
}
else {
    $montantTotal = $prix_unitaire*$nombre;
    //echo "Le montant total est de $tAmount <br/><br/>";
    echo "Le prix unitaire = {$prix_unitaire} et la quantité = {$nombre} <br>";
    echo "Le montant total à payer est donc de $montantTotal <br/><br/>"; 
}

// Loops (les boocles)
while ($i <= 5) {
    echo "Merci d'avoir acheter chez vous !! <br/>";
    $i++;   // Opérateur d'incrémentation => i = i+1
}
do {
    echo '<br> Merci encore une fois ! <br>';
} while ($i < 0 AND $i >3);

for ($i=0; $i < 2; $i++) { 
    echo 'Nous espérons vous acceuillir très bintôt ! <br>';
}

switch ($prix_unitaire) {   // par rappport au prix initiale, on compare avec les cas   // admettons que chaque produit a un prix unique
    case 228:
        echo 'C\'est une pomme <br/><br/>';
        break;
    case 199:
        echo 'C\'est une orange<br/><br/>';
        break;
    case 80:
        echo 'C\'est une mangue';
        break;
    default:
        echo 'C\'est autre chose';
        break;
}


# ARRAY (TABLEAU)

// Simple
print("Voici les meilleurs clients du jour <br/>");
$clients = array('Isaya', 'Daniel', 'Naomi');
for ($i=0; $i < 3; $i++) { 
    echo '. ' . $clients[$i] . '<br/>';
}

// Dictionnaire
//$contact = array('Pombo' => '71 182 680', 'Janvier' => '68 453 612', 'Martine' => '75 294 098'); // Meme chose que la ligne suivante
$contact = ['Pombo' => '71 182 680', 'Janvier' => '68 453 612', 'Martine' => '75 294 098'];

echo "<br/> Nos contacts <br/>";
foreach ($contact as $key => $value) {
    echo $key . ' : ' . $value . '<br/>';
}



# FUNCTIONS (Fonctions)

// internal function
echo '<br/><br/><br/>' . 'I am a free programmer' . ' a ' . strlen('Iam a free programmer') . ' caractères <br/><br/><br/>';  // Retourne la longueur d'une chaine de caractères

// custumized function

function totalAmount($up, $num) {      // Cette fonction calcul le prix total
    return $up * $num;
}

function MotFinal()  // Un mot final pour  notre client
{
    $prix_unitaire = 228;      // Déclaration et initialisation de variable
    $nombre = 5;

    echo 'Nous vous remercions de nous avoir choisie et acheter les produit de ' . totalAmount($prix_unitaire, $nombre) . ' BIF <br/>';
    echo 'Bon voyage !!!';
}

MotFinal();  // Appelle de la fonction pour l'affichage

# OOP

    // In the next work

?>