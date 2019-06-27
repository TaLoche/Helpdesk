## Les différentes boucles de PHP

https://www.phpfacile.com/apprendre_le_php/boucles_for_while_en_php

### Boucle `while`


La boucle `while` (tant que) va être utilisé dans les cas où l'on "__ne sait pas__" le nombre de boucles à effectuer. (__de préférence__)

```php
while (/* Conditions */) {
/* Actions de la boucle */ 
}
```
Par exemple: (tant que la valeur n'est pas 10 - `!` permet de demander `différent de`)
```php
$chiffre = null;

while ($chiffre !==10) {
    $chiffre = (int)readline('Entrez une valeur : ');
}
echo 'Bravo vous avez gagné !';
```

- __Conditions__ - Les conditions (tant que c'est vrai je continue la boucle, sinon je stoppe la boucle).
- __Actions de la boucles__ - Les action à appliquer à chaque boucle.

:warning: __Faire attention à se que la boucle puisse se finir !__

### Boucle `for`


La boucle `for` va être utilisé dans les cas où l'on "__sait__" le nombre de boucles à effectuer. (__de préférence__)

```php
for (/* Initialisation */;/* Conditions */;/* Actions */) {
// Actions de la boucle 
}
```

- __Initialisation__ - Action appliqué au départ de la boucle (__Pas à chaque boucle__).
- __Conditions__ - Les conditions (tant que c'est vrai je continue la boucle, sinon je stoppe la boucle).
- __Actions__ - Les actions à appliquer à chaque boucle. 
- __Actions de la boucles__ - Les actions à appliquer à chaque boucle.

:warning: __Faire attention à se que la boucle puisse se finir !__

La boucle est souvent utilisé comme ceci ; 
```php
for ($i = 0; $i < $maVariable ; $i++) { 
// Actions de la boucle 
}
```
> On définit la variable `$i` avec une valeur par défaut de `0`, ensuite je lui indique que TANT QUE `$i` est inférieur à `$maVariable` alors je continue de faire des boucles, puis je lui dis d'ajouter 1 à `$i` à chaque boucle.

### Boucle `foreach`

La boucle `foreach` sert à faire une boucle sans indiquer le moment où celle-ci doit s'arréter, car elle va boucler en fonction du nombre de données dans le tableau.
Exemple avec cette liste `$maListe = ['1','2','3','4'];`, il y aura 4 boucle, car il y a 4 données dans cette liste.


#### Méthode n°1


```php
foreach (/* Tableau */ as /* Ligne */) {
// Actions par tour de boucle 
}

```
- __Actions__ - Les actions à appliquer à chaque boucle.
- __Tableau__ - Le tableau que vous avez créée au préalable ; Exemple `$listeDesFilms`.
- __Ligne__ - La ligne du tableau, une nouvelle variable (nommée comme tu le souhaites) qui ne sortira pas de la boucle `foreach`.


#### Méthode n°2


Exemple de liste ; 
```php
$maListe = [
'ligne_1' => 'valeur_1', 
'ligne_2' => 'valeur_2', 
'ligne_3' => 'valeur_3'
];
```

```php
foreach (/* Tableau */ as /* Ligne */ => /* Valeur */) {
// Actions par tour de boucle 
}
```

- __Actions__ - Les actions à appliquer à chaque boucle.
- __Tableau__ - Le tableau que vous avez créée au préalable ; Exemple `$listeDesFilms`.
- __Ligne__ - La ligne du tableau, une nouvelle variable (nommée comme tu le souhaites) qui ne sortira pas de la boucle `foreach`.
- __Valeur__ - La valeur de la ligne, une nouvelle variable (nommée comme tu le souhaites) qui ne sortira pas de la boucle `foreach`.


### Méthode n°3
Identique à la `méthode n°1` ou à la `méthode n°2` à la différence qu'à la place des `{ /* Interieur de la boucle */ }` on vient remplacer par `: /* Interieur de la boucle */ endforeach;`.
C'est utilisé pour éviter de confondre la fermeture des accolades (`}`) du `foreach` avec la fermeture des accolades des `if() {}`, `esle if() {}` et `else {}`.

```php
foreach (/* Tableau */ as /* Ligne */):
// Actions par tour de boucle 
endforeach;
```
OU
```php
foreach (/* Tableau */ as /* Ligne */ => /* Valeur */):
// Actions par tour de boucle 
endforeach;
```

- __Actions__ - Les actions à appliquer à chaque boucle.
- __Tableau__ - Le tableau que vous avez créée au préalable ; Exemple `$listeDesFilms`.
- __Ligne__ - La ligne du tableau, une nouvelle variable (nommée comme tu le souhaites) qui ne sortira pas de la boucle `foreach`.
- __Valeur__ - La valeur de la ligne, une nouvelle variable (nommée comme tu le souhaites) qui ne sortira pas de la boucle `foreach`.
