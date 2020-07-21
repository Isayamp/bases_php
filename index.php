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

if ($nombre > 0 AND $prix_unitaire != 0) {  // On teste que nombre est bien supérieur à 0 et le prix unitaire est différent de O pour savoir s'il a un achat ou pas
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



?>