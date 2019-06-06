
***
# La peinture du Web
***



VOCABULAIRE
-----------
* `bloc` prend la taille/largeur de la pages
* `inline` reste dans la largeur de l'élément où il est contenu

* `margin` (marge extérieure)
* `margin: 10px 7px 5px 3px;` taille en haut, droite, bas, gauche (sens des aiguilles d'une montre) autour d'un élément
* `margin: 10px 0 7px;` margin sans marge à gauche et droite juste en haut et bas
* `margin:20px 10px;` margin à deux valeurs, la 1ere valeur c'est haut et bas et la 2ème c'est gauche droite

* même logique pour le `padding` (marge intérieure)

* `border`

* `display: inline;` ou `display: block;` permet de modifier le comportement d'un élément par rapport au contenu ou taille de la page.
* la valeur __inline-block__ pour le `display: inline-block;` permet de garder l'élément inline mais grâce à la valeur block on peut lui appliquer une __hauteur__(height) et __largeur__ (width)

* la balise __img__ vient avec un complément __alt__ pour commenter l'image pour les non-voyants, celle-ci est utile pour les images dites pertinentes

* `box-sizing: content-box;` ou `box-sizing: border-box;` permet d'avoir une taille définie qui ne sera pas sujette à rajouter des marges ou padding d'éléments par la suite, la taille de l'élément est fixée et donc protégée (valeur défaut)
*__plus utiliser box-sizing: border-box;__ (indique au navigateur de prendre en compte la bordure et le remplissage dans la valeur définie pour la largeur et la hauteur. Autrement dit, si on définit un élément avec une largeur de 100 pixels, ces 100 pixels inclueront la bordure et le remplissage éventuellement ajoutés et c'est le contenu de la boîte qui sera compressé pour absorber cette largeur supplémentaire. Cela permet généralement de simplifier le dimensionnement des éléments.)
Autant l'appliquer sur en début du CSS avec __`* {box-sizing:border-box;}`__
* __img__ préciser qu'une hauteur (__height__) ou une largeur (__width__) permet de garder une taille d'image homothétique. Les proportions sont donc ainsi gardées.
Pour centrer une image rajouter `display:block;` et `margin:auto;`

* `last of type` (pseudo-class) cible un élément qui est le dernier enfant d'un type donné dans la liste des enfants de l'élément parent.

* `:after` crée un pseudo-élément qui sera le dernier enfant de l'élément sélectionné. Il est souvent utilisé pour ajouter du contenu cosmétique à un élément, en utilisant la propriété CSS content. Par défaut, ce contenu est de type « en ligne ».




RECOMMANDATIONS
----------------

* `/* Commentaire */->` Il faut commenter son fichier CSS pour guider
* utiliser google fonts https://fonts.google.com et préférer la méthode Embbed->Standard à la version Embbed->Import

* pour appeler une __class__ appliquée dans le html, dans le fichier CSS il faut l'appeler avec le `. + nom de la classe` exemple __.definition__

* BEM est un sigle pour __Blocks - Elements - Modifiers__. Ce qui en français serait traduit ainsi : Blocs - Éléments - Modificateurs.
Trois entités qui vont permettre de découper et organiser tous les composants d'une page web.

* En BEM, toutes les classes CSS sans exception commencent nécessairement par le nom du bloc.
Par exemple pour le menu : `.menu`.
Si on souhaite ajouter dans notre bloc .menu un élément item, on va le nommer `.menu__item`. On sépare le bloc de l'élément par deux underscores.
Il est donc facile de lire le code et de comprendre que `.menu__item` est un élément de `.menu`.
Pour le modificateur, on sépare le bloc ou l'élément par deux tirets `.bloc__element--modificateur`.
