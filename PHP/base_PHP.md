***
# Bases PHP
***

* __Fiches Récap__ https://github.com/O-clock-Alumni/fiches-recap/tree/master/php


#### Vocabulaire
* `String` ou `chaîne de caractères` est une séquence de caractères, c’est-à-dire un texte.Notez que toute valeur stockée dans une variable placée entre guillemets ou apostrophes sera considérée comme une chaine de caractères.
* `concaténation` agglutiner des chaines de caractères pour obtenir un résultat en PHP
* une variable peut être un `string` donc du __texte__, une valeur `true` ou `false` donc du __booléan__ ou une valeur avec une fraction `32.4` donc du __float__
* __Transtypage__ est une conversion en PHP d'une valeur ou variable vers un autre type. Donc du booléan vers du string ou inverse.



#### Bonnes pratiques
* `<?php ?>` on inclut notre code PHP dans un fichier HTML, grâce à cette balise
* `$` on déclare une variable avec ce symbole et en lui donnant un nom ($nomdevariable) et elle se termine toujours par `;`
* On peut nommer nos variables, avec ou sans majuscule, en utilisant des `_` (underscore / tiret bas) entre des mots, cependant tous les autres caractères spéciaux tel que `é`, `!`, `%`, etc ..., sont à éviter.
* Cependant on prendre l'habitude de nommer nos variables en __CamelCase__, c'est-à-dire que la 1ère lettre est en minuscule et que si le nom contient plusieurs mots, on sépare visiuellement les mots en mettant une majuscule à chacun.
* le fichier php est lu d'en haut à en bas, donc les valeurs doivent être données en respectant cet ordre
* pour faire un accent en php `\'` 
* `"texte"` php comprend qu'il pourrait avoir du code entre les `""`
* `'texte'` php ignore qu'il pourrait avoir du code entre les `''`
* en terme de performance il est mieux de faire en formulation PHP `'texte qui ne change pas'+ code (soit $variable ou soit 'code')` pour éviter qu'il n'ait à interpréter toute la ligne. On met ainsi en évidence là ooù l'on souhtaite que le PHP soit lu et interprété.
* le `\n` permet de faire un saut à la ligne (ne fonctionne qu'avec un string entre "")
* `PHP_EOL` ajoute le saut de ligne (End Of Line) par exemple (`echo 'Hello Universe' . PHP_EOL;`)
* `var_dump('Hello');` permet de connaitre le type de variable (__boolean, string or float__)
* `$ nombre = 92;` variable dont le nombre est de 92


#### Opérateurs de Comparaisons
* `=` affectation
* `==` opérateur de comparaison
* `===` les valeurs comparées doivent être du même type (__comparaison plus stricte et donc à utiliser majoritairement__)
* `!=` différent de (=/=)
* `<` inférieur à
* `>` supérieur à
* `<=` inférieur ou égal à
* `>=` supérieur ou égal à
* `&&` comparaison des deux éléments présents avant et après
* `||` comparateur équivalent à "ou"
* `!false` inverse la valeur d'un booléen donc ici de `true`
* `if` comparer la valeur d'une variable avec une valeur attendue. Si la comparaison est vraie, on exécute ce qu'il y a entre accolades. Sinon on ne fait rien (mais on lui précise pas de ne rien faire).
* `else` indique de faire quelque chose dans le cas où le "if" est faux
* `else if` comme son nom l'indique, est une combinaison de if et de else. Comme l'expression else, il permet d'exécuter une instruction après un if dans le cas où le "premier" if est évalué comme __FALSE__. Mais, à la différence de l'expression else, il n'exécutera l'instruction que si l'expression conditionnelle elseif est évaluée comme __TRUE__.


#### Opérateurs mathématique
* `=` donne une valeur, par exemple : $a = 2;
* `*` produit (multiplication) $a * $b;
* `/` quotient $a / $b;
* `+` somme $a + $b;
* `-` différence $a - $b;
* Tout est combinable, par exemple: $c = ($a -$b) + $a * $b;
* `++` pour incrémenter de 1, par exemple: $b++;
* `--` pour décrémenter de 1, par exemple: $b--;
* `%` le modulo c'est le reste de la division euclidienne, par exemple: 17 % 5 = 2 (division euclidienne : 3 reste 2)


#### Raccourcis clavier
* `php -v` donne la version de php
* `php -a` interactive mode enable (interprétation du code php)



##### Exemples de code PHP

        $prof = 'Dyjp';
        $cockpit = 'blue';
        echo 'Le prof du cockpit ' . $cockpit. ' est' . $prof;
        Le prof du cockpit blue estDjyp
     




