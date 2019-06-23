# Les conditions

Elles permettent de déterminer un résultat ou comportement différent dépendant de la valeur de la variable.

```php
$note = 12;
if ($note >= 10) {
    echo 'Bravo vous avez la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
```

Si la variable `$note` n'est pas une valeur définie et que l'utilisateur doit la saisir on peut utiliser `readline`.

```php
$note = readline('Entrez votre note : ');
if ($note >= 10) {
    echo 'Bravo vous avez la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
```

On chercher à rajouter la condition où l'utilisateur a tout juste la moyenne. On se sert donc de `else if` (sinon si) pour rajouter cette option.

```php
$note = readline('Entrez votre note : ');
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
} else if ($note == 10) {
    echo 'Bravo vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
```

Comme vu dans les __Bases PHP__ il est plutôt conseillé d'utiliser l'opérateur de comparaison `===`plutôt que celui utilisé `==`ici pour déterminer `$note == 10`.
Afin que l'opérateur de comparaison soit le plus stricte possible dans notre 1ère ligne nous allons rajouter `(int)` afin que PHP puisse strictement reconnaître la ligne `else if ($note === 10)`.
```php
$note = (int)readline('Entrez votre note : ');
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
} else if ($note === 10) {
    echo 'Bravo vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
```
