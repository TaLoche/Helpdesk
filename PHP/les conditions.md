# Les conditions

Elles permettent de déterminer un résultat ou comportement différent dépendant de la valeur de la variable.

#### L'utilisation de __if__ (si) et __else__ (sinon) pour exprimer des conditions

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

#### L'utilisation de __else if__ (sinon si) pour compléter des conditions

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

:warning:

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

#### La condition __switch__ permet de proposer une approche intéressante aux choix multiples d'une condition

```php
$action = (int)readline('Entrez votre action : (1: attaquer, 2 : défendre, 3: passer mon tour)');

switch ($action) {
    case 1:
        echo 'J`\attaque !';
        break; //si break n'est pas spécifié la valeur par défaut sera malheureusement prioritaire
    case 2:
        echo 'Je défends !';
        break;
    case 3:
        echo 'Je ne fais rien.';
        break;
    default:
        echo 'Commande iconnue';
}
```

La variante de cet exemple peut également s'écrire :

```php
$action = (int)readline('Entrez votre action : (1: attaquer, 2 : défendre, 3: passer mon tour)');

if  ($action === 1) {
    echo 'J`\attaque !';
} else if ($action === 2) {
    echo 'Je défends !';
} else if ($action === 3) {
    echo 'Je ne fais rien.';
} else {
    echo 'Commande iconnue';
}
```

#### L'utilisation de __ET__ (&&) et __OU__ (||) dans les conditions

```php
$heure = (int)readline('Entrez une heure : ');

if (($heure <= 9 && $heure <= 12) || ($heure <= 14 && $heure <= 17)) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Le magasin sera fermé';
}
```
