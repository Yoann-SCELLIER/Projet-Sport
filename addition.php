<!-- EXO Définissez une fonction division qui prend deux paramètres et renvoie le résultat de la division. -->

<?php

// création d'une fonction nommé "salutation" qui contien une variable par défeaut nommé "Anonyme" si vide
function salutation($nom = "Anonyme") {

// création d'une "echo" qui affichera les "noms"
    echo "Bonjour, $nom !<br>";
}

// exemples d'utilisation
salutation();          // Affiche "Bonjour, Anonyme !" (aucun nom d'utilisateur)
salutation("Yoann");   // Affiche "Bonjour, Yoann !"
salutation("Bob");     // Affiche "Bonjour, Bob !"
salutation("Jon");     // Affiche "Bonjour, Jon !"
salutation("Tony");     // Affiche "Bonjour, Tony !"

?>
