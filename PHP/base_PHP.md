***
# Bosser en PHP
***

* __Fiches Récap__ https://github.com/O-clock-Alumni/fiches-recap/tree/master/php


#### Vocabulaire
* `String` ou `chaîne de caractères` est une séquence de caractères, c’est-à-dire un texte.Notez que toute valeur stockée dans une variable placée entre guillemets ou apostrophes sera considérée comme une chaine de caractères.
* `concaténation` agglutiner des chaines de caractères pour obtenir un résultat en PHP
* une variable peut être un `string` donc du __texte__, une valeur `true` ou `false` donc du __booléan__ ou une valeur avec une fraction `32.4` donc du __float__
* __Transtypage__ est une conversion en PHP d'une valeur ou variable vers un autre type. Donc du booléan vers du string ou inverse.



#### Bonnes pratiques
* le fichier php est lu d'en haut à en bas, donc les valeurs doivent être données en respectant cet ordre
* pour faire un accent en php `\'` 
* `"texte"` php comprend qu'il pourrait avoir du code entre les `""`
* `'texte'` php ignore qu'il pourrait avoir du code entre les `''`
* en terme de performance il est mieux de faire en formulation PHP `'texte qui ne change pas'+ code (soit $variable ou soit 'code')` pour éviter qu'il n'ait à interpréter toute la ligne. On met ainsi en évidence là ooù l'on souhtaite que le PHP soit lu et interprété.
* le `\n` permet de faire un saut à la ligne (ne fonctionne qu'avec un string entre "")
* `PHP_EOL` ajoute le saut de ligne (End Of Line) par exemple (`echo 'Hello Universe' . PHP_EOL;`)
* `var_dump('Hello');` permet de connaitre le type de variable (__boolean, string or float__)
* `$ nombre = 92;` variable dont le nombre est de 92


#### Opérations de Comparaisons
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

CamelCase

else
else if
if


#### Raccourcis clavier
* `php -v` donne la version de php
* `php -a` interactive mode enable (interprétation du code php)



##### Exemples de code PHP

        $prof = 'Dyjp';
        $cockpit = 'blue';
        echo 'Le prof du cockpit ' . $cockpit. ' est' . $prof;
        Le prof du cockpit blue estDjyp
     




