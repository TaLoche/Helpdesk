***
# La maçonnerie du Web
***


BONNES PRATIQUES
---------------
* __Commenter sa construction__ pour laisser un mode d'emploi grâce à `<!-- Test -->`
* __indentation__ __(touche TAB)__ permet de donner une hiérarchie aux balises pour faciliter la lisibilité du document html.
On indente une balise déjà contenue dans une autre balise avec un saut de ligne
* __Sémantique__ donner un rôle à notre texte de code pour le navigateur via des informations - donner du sens à notre contenu
* L'ordre des __stylesheet__ `link` est important, la générique *reset* est à mettre avant la notre `style.css` dans l'ordre des lignes de code car cette dernière sera prioritaire sur le style appliqué
* Les __attributs__ viennent après la balise et expriment une valeur avec `="valeur"` comme par exemple `<balise attribut"valeur">` ou `(<img src="chemin/de/mon/image">)`
* Les attributs __class__ (pour identifier certains __éléments CSS__) et __id__ pour un élément unique (il est conseillé d'éviter `id`) 
* __Un élément peut avoir plusieurs class__


CONSTRUCTION TYPE HTML
----------------------
```
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<!-- titre de la page - titre présent dans l'onglet -->
		<title>Ma première page !</title>
		<link rel="stylesheet" href="../css/style.css" />
	</head>
	<body>
		<!-- titre de niveau 1 -->
		<h1>Bienvenue chez O'Clock</h1>
		<h2>Formation développeur Web</h2>
		<!-- paragraphe de texte -->
		<p>Voici la première page que vous allez créer. Ouais, enfin, modifier. Mais bon, ne charriez pas, c'est déjà pas mal ! Un voyage de mille lieues commence toujours par un premier pas.</p>
</body>
</html>
```

* __```<!DOCTYPE html> ```__ Au début de HTML, dans les années 1991-1992, les doctypes étaient utilisés pour faire référence à des ensembles de règles qu'on pouvait utiliser pour dire qu'un document était du HTML « valide » et détecter les erreurs de balisage. Cependant, ceux-ci ne sont plus utilisés aujourd'hui et sont juste présents pour s'assurer que la page puisse fonctionner y compris sur les anciens navigateurs. Pour le moment, c'est tout ce qu'il y a à savoir à propos des doctypes.
* __```<html></html> ```__ — l'élément ``` <html> ```. Cet élément encadre tout le contenu de la page. Cet élément est parfois appelé l'élément racine.
* __``` <head></head> ```__ — l'élément ``` <head> ```. Cet élément est utilisé comme un container pour toutes les choses qui font partie de la page HTML mais qui ne sont pas du contenu affiché. C'est dans cet élément qu'on mettra des mots-clés, une description de la page qui apparaîtra sur les moteurs de recherche, les liens vers les fichiers CSS à utiliser pour la mise en forme, les déclarations des jeux de caractères à utiliser et ainsi de suite.
* __``` <body></body> ```__ — l'élément ``` <body> ```. Cet élément est celui qui contient tout le contenu que vous souhaitez afficher pour qu'il soit vu par les visiteurs : cela peut être du texte, des images, des vidéos, des jeux, des pistes audio jouables, et ainsi de suite.
* __``` <meta charset="utf-8"> ```__ — Cet élément définit le jeu de caractères qui devrait être utilisé pour le document et indique que c'est utf-8. utf-8 regroupe l'ensemble des caractères connus utilisés dans les différents langages humains. Généralement, utf-8 permet de gérer n'importe quel texte que vous pourriez utiliser sur la page. Il n'y a pas de raison de ne pas le définir, et il permet d'éviter certains problèmes plus tard.
* __``` <title></title> ```__  — L'élément ```<title> ``` définit le titre de votre page. C'est ce titre qui apparaîtra sur l'onglet lorsque la page sera chargée. C'est également ce titre qui sera utilisé pour décrire la page lorsque vous la placez dans vos marques-pages.


ELEMENTS DU SQUELETTE HTML
--------------------------
* __HEAD__
* __title__
* __link__ (pour lier la feuille CSS) + toujours mettre un lien vers une feuille de style de type Reset (pour avoir une base commune entre navigateurs)
* __BODY__
* __div id="container"__
* __header__
* __main__ (texte principal)
* si besoin les balises suivantes sont dispos: __article__, __section__ (ne pas mettre de titre h1 à l'intérieur, si besoin utiliser plutôt __article__), __div__(crée un bloc d'aucune valeur sémantique) __span__ (séparation qui reste inline donc contenue)
* __footer__


BALISES HTML
------------
* __Image__ `<img src="images/firefox-icon.png" alt="Mon image de test">`
* __Liste__ `<ul>` *unordered list* et `<ol>` *ordered list*
* `<p>` pour paragraphe
* `<h1>` à `<h6>` titres
* `&copy;` donne le symbole copyright

* __lien__ `<a href="https://www.mozilla.org/fr/about/manifesto/">Manifeste Mozilla</a>`
* __Lien pour un nouvel onglet__ `<a href="" target="_blank">Texte du lien</a>`
* __Lien avec Ancre__ `<a href="#oclock">O'clock</a>` *lien n'ouvre pas une nouelle page mais déplace la navigation sur la page en cours*

* __hr__ représente un changement thématique entre des éléments de paragraphe *par exemple, un changement de décor dans un récit, un changement de sujet au sein d'un section.*
* `strong` gras (valeur sématique par rapport à b pas une valeur de mise en page)
* `em` italique (valeur sématique par rapport à i)
* `del` strike (supprimé)
* `ins` underline (ajouté)


EMMETT sous VSC
------
* `!` Produit les balises de départ d'un document html type
* `h1+p+h2` produit des structures de balises automatiques *(possible de modifier la formule de départ selon l'envie article(h1+p)+section+footer)*
* `img.header__logo` produit `<img src="" alt="" class="header__logo">`
* `ol>li*6` produit une liste ordonnée de 6 éléments

###### d'autres exemples
* `div#container(header>img>h1>button)+section+section+section+footer`
* `h2+(figure>img>figcaption)*3`


***

### Infos bonus pour fayoter
* `HTTP` __Hypertext transfer protocole__ (permet d'envoyer des fichiers entre ordinateurs)
* Une information sur une donnée c'est une __métadonnées__ 
* Tout texte, élément doit être encadré avec des balises avec __`<balise>`__ et __`</balise>`__ une qui ouvre et une qui ferme.
* Certaines balises auto fermantes (comme __link, br, hr, img__) etne nécissite pas de balise pour fermer
* `Lorem+Tab` faux texte pour peupler entre des balises.
* `*` permet de cibler tous les éléments de la page `* {color:#red;}`
