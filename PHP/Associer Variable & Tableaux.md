# Associer des variables
***

### Appeler des variables

```php
$note = 10;
$note2 = 15;
echo ($note + $note2) / 2;
```

Autre exemple

```php
$prenom = 'Marc';
$nom = 'Doe';
echo $prenom . ' ' . $nom;
//variante
echo "$prenom\n$nom";
```

### On combine le tout

```php
$prenom = 'marc';
$nom = 'doe';
$note = 10;
$note2 = 20;
$moyenne = ($note+$note2) / 2; // Pour la variante ci-dessous, on crée une nouvelle variante pour se faciliter la tâche.
echo 'Bonjour ' . $prenom  . ' ' . $nom . ' vous avez eu ' . (($note + $note2) / 2) . ' de moyenne.' . PHP_EOL;
//variante
echo "Bonjour $prenom $nom vous eu $moyenne de moyenne. "
```

### Les tableaux

// Entre crochets on charge des valeurs pour une variable et on les appelles ensuite avec leur position (attention la liste commence à la valeur 0 !)

###### Tableau numéroté

<?php
$notes = [10, 20, 9, 8, 13, 'élève'];
echo $notes [3];
?>

###### Tableau associatif (on donne a des clés auxquelles on donne des valeurs)
<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
echo $eleve['nom'] . ' ' . $eleve['prenom'];
?>

// Possibilités d'évolution de tableaux

<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
$eleve['prenom'] = 'Jean';  //Ici on change la valeur déjà existante de Marc à Jean
$eleve['notes'][3] = 16;    // Ici on rajoute une note à la variable existante au-dessus
$eleve['notes'][] = 19;     // Si on ne précise pas le n° d'index, la valeur sera automatiquement ajoutée en dernière position 
$eleve[] = 'CM2';           // Par contre ici, sans n° d'index, la valeur sera mise devant et prendra donc la position 0 car l'index existant (nom, prénom et notes) n'est pas numérique
echo $eleve['nom'] . ' ' . $eleve['prenom'] . ' a eu comme note en français ' . $eleve['notes'][3];
?>


// Tableaux avec plusieurs valeurs, comment s'y retrouver pour affichier la valeur voulue
<?php
$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16, 16, 16]
    ],
    [
        'nom' => 'Brou',
        'prenom' => 'Bernard',
        'notes' => [9, 12, 11]
    ]
];
echo $classe [1]['notes'][1];

?>
