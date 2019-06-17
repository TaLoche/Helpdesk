***
# Bosser en PHP
***

* __Fiches Récap__ https://github.com/O-clock-Alumni/fiches-recap/tree/master/php


####Bonnes pratiques
* le fichier php est lu d'en haut à en bas, donc les valeurs doivent être données en respectant cet ordre
* pour faire un accent en php `\'` 
* `"texte"` = php comprend qu'il pourrait avoir du code entre les `""`
* `'texte'` = php ignore qu'il pourrait avoir du code entre les `''`
* en terme de performance il est mieux de faire en formulation PHP `'texte qui ne change pas'+ code (soit $variable ou soit 'code')` pour éviter qu'il n'ait à interpréter toute la ligne. On met ainsi en évidence là ooù l'on souhtaite que le PHP soit lu et interprété.


####Raccourcis clavier
* `php -v`donne la version de php
* `php -a`interactive mode enable (interprétation du code php)

          echo "Hello World";
          var_dump('Hello'); permet de connaitre le type de variable (boolean, string or float)
          $ nombre = 92; (variable dont le nombre est de 92)


voir true/false et bool //////
transtypage /////


concaténation = agglutiner des chaines de caractères pour avoir un résultat en string



#####Exemples de code PHP
`$prof = 'Dyjp';
$cockpit = 'blue';
echo 'Le prof du cockpit ' . $cockpit. ' est' . $prof;
Le prof du cockpit blue estDjyp`


echo "Hello Universe\n";      le \n permet de faire un saut à la ligne (ne fonctionne qu'avec un string entre "")
echo 'Hello Universe' . PHP_EOL;   la constante PHP_EOL ajoute le saut de ligne (End Of Line)

= affectation
== opérateur de comparaison
=== les valeurs comparées doivent être du même type (comparaison plus stricte et donc à utiliser majoritairement)

!= différent de (=/=)

    < : inférieur à
    > : supérieur à
    <= : inférieur ou égal à
    >= : supérieur ou égal à
