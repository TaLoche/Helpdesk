
<?php
/*
On inclut notre code PHP dans un fichier HTML, grâce à une balise <?php ?>
On peut ausis avoir un fichier qui ne contient QUE du code PHP et celui-ci peut ne pas avoir de balise fermante. La balise ouvrante est cependant indispensable
*/
echo 'Hello Universe' . PHP_EOL;

// On déclare une variable avec le symbole $ (dollar) et en lui donnant un nom.
// On lui affecte ensemble une valeur grâce au symbole = (égal) et on termine TOUJOURS l'instruction par un point-virgule

$prof = 'Djyp';
$cockpit = 'blue';
var_dump($prof, $cockpit);


/* Les variables
On peut nommer nos variables comme on veut, avec ou sans majuscule, en utilisant des _ (underscore / tiret bas) entre des mots.
Cependant on prendre l'habitude de nommer nos variables en CamelCase, c'est-à-dire que la 1ère lettre est en minuscule et que si le nom contient plusieurs mots, on sépare visiuellement les mots en mettant une majuscule à chacun.

ex: $coursDuJour, $classe, $teamFayot

*/

// Commentaire sur une seule ligne
/*
Commentaires sur plusieurs lignes
On va voir les structures de contrôle
*/
$jeanIsBlue = true;

// On a un if, c'est à dire qu'on va comparer la valeur d'une variable avec une valeur attendue. Si la comparaison est vraie, on exécute ce qu'il y a entre accolades. Sinon on ne fait rien (mais on lui précise pas de ne rien faire).
if ($jeanIsBlue  == true) {
    echo 'Jean est dans le cockpit bleu' . PHP_EOL;
}

// On pourrait utiliser la même structure avec un "else" en plus, qui indique de faire quelque chose dans le cas où le "if" est faux
$albanIsBlue = false;

if ($albanIsBlue == true) {
    echo 'Alban est dans le cockpit bleu' . PHP_EOL;
} else {
    echo 'Alban est dans le cockpit rouge' . PHP_EOL;
}

// On peut faire plus d'une comparaison pour la même variable et dans la même structure de contrôle
$saison = 2;

if ($saison == 0) {
    echo 'Les cours n\'ont pas encore commencés' . PHP_EOL;
} else if ($saison == 1) {
    echo 'On apprend HTML & CSS' . PHP_EOL;
} else if ($saison == 2) {
    echo 'On apprend PHP' . PHP_EOL;
} else {
    echo 'On ne sait pas encore ce qu\'on va apprendre' . PHP_EOL;
}

// On peut comparer autre chose que des valeurs égales !
// On peut utiliser le != pour vérfier que deux valeurs sont différentes

if ($prof != 'Claire') {
    echo 'Les deux chaines de caractères sont différentes' . PHP_EOL;
}

// On peut aussi comparer des nombres
if ($saison < 3) {
    echo 'On n\'a pas encore vu JavaScript' . PHP_EOL;
}

/*
    < : inférieur à
    > : supérieur à
    <= : inférieur ou égal à
    >= : supérieur ou égal à
*/

// Petit rapel sur la concaténation
// IL est préférable pour la lisibilité et pour éviter des erreurs de mettre des espaces autour du point lors d'une concaténation
// On ajoute la constante PHP_EOL pour créer un retour à la ligne pour rendre le texte lisible dans le terminal
// PHP_EOL c'est un peu comme la balise <br> mais pour le terminal. Ca veut dire qu'on va arrêter de s'en servir dès demain.
echo 'Pour cette saison 0' . $saison . ', le prof est ' . $prof . ' dans le cockpit ' . $cockpit . PHP_EOL;


// Comment avoir plusieurs conditions pour un même if
// && (AND, ET) permet de préciser que deux comparaisons doivent être vraies et non identiques
if ($prof == 'Dyjp' && $cockpit == 'blue') {
    echo 'Les deux conditions sont remplies, on affiche donc cette phrase.' . PHP_EOL;
}

// || (OR, OU) permet de préciser qu'une seule des comparaisons doit être vraie pour exécuter des instructions
if ($cockpit == 'blue' || $saison == 2) {
    echo 'On s\'amuse bien en cours !';
}

/*
Le symbole ! (point d'exclamation) inverse la valeur d'un booléen. S'il vaut true, PHP le traite comme un false et inversement.
On teste ici, si la valeur inverse de $jeanIsBlue est true, autrement dit, on teste si $jeanIsBlue est false
*/
if (!$jeanIsBlue) {
    echo 'Jean est dans le cockpit red' . PHP_EOL;
}

// Ça serait la même chose que d'écrire
if ($jeanIsBlue == false) {
    echo 'Jean est dans le cockpit red' . PHP_EOL;
}

// Pour déclarer une variable, on a écrit
$var = 'une valeur quelconque';
// Pour changer sa valeur, on écrit
$var = 'une autre valeur';
// (la même chose)


// Opérateurs mathématiques
$a = 2;
$b = 3;
// Le produit de $a et $b
$c = $a * $b;
echo $c . PHP_EOL;
// Le quotient de $a et $b
$c = $a / $b;
echo $c . PHP_EOL;
// La somme de $a et $b
$c = $a + $b;
echo $c . PHP_EOL;
// La différence de $a et $b
$c = $a - $b;
echo $c . PHP_EOL;

// On peut combiner tout ça
$c = ($a - $b) + $a * $b; // Les parenthèses ici ne servent strictement à rien mais on voit qu'on peut en mettre pour spécifier la priorité des calculs
echo $c . PHP_EOL;

// On peut réaffecter une valeur à une variable en utilisant cette même variable
// Ici on va calculer ($a * 2 + $b) et réaffecter le résultat dans $a
$a = $a * 2 + $b;


// On peut incrémenter (ajouter 1) une variable avec ce raccourci :
$b++;
// C'est la même chose que :
$b = $b + 1;
// On peut également décrémenter avec
$b--;


$str = 'Bonjour';
// On peut concaténer comme ça :
$str = $str . ' Universe !'; // résultat : "Bonjour Universe !"
// Ou faire le même genre de concaténation comme ça (cad ajouter une chaine de caractère au bout de notre variable)
$str .= ' Hein que c\'est cool le PHP ?'; // résultat : "Bonjour Universe ! Hein que c'est cool le PHP ?"

// Dans le même genre d'idée 
$entier = 9;
// On peut additionner une valeur à $entier comme ça :
$entier = $entier + 2;
// La même addition qui prend la valeur actuelle de $entier et qui ajoute deux, prend ce résultat et le réaffecte à $entier peut s'écrire aussi comme ça
$entier += 2;


// Le modulo
// Le modulo c'est le reste de la division entière
// 10 % 7 = 3 (division euclidienne : 1 reste 3)
// 17 % 5 = 2 (division euclidienne : 3 reste 2)
// Le modulo c'est le reste !

// On utilise le modulo avec 2 pour savoir si un nombre est pair ou impair
// 4 % 2 = 0 // Il n'y a pas de reste donc 4 est pair
// 7 % 2 = 1 // Il reste 1 donc 7 est impair


// Parlons d'une balise qu'on pourra mettre au milieu du HTML
?>
Bonjour tout le monde, je suis <?php echo $prof; ?>.
Je suis, pour cette saison, le prof du cockpit <?= $cockpit ?>

