***
# Pour bosser comme un pro avec GitHub
***
<br />

* Une fois la __VM démarrée__
* Lancement du __Terminal__ (barre des tâches de Mint, pas celui de Visual Studio Code)
* On se déplace dans le terminal pour se rendre là où on souhaite travailler
`cd /var/www/html`
* Là un petit `ls` permet de voir tous les dossiers et fichiers présents
* Si besoin création d'un nouveau dossier avec `mkdir + nomdudossiersouhaité` ici par exemple `mkdir S01-E03`
* On rentre dans ce dossier avec `cd S01-E03/`
* maintenant on va cloner (c'est à dire télécharger le dossier de travail présent sur Github tout en gardant un lien entre son dossier de travail et Github)
* `git clone +l'adresse de clonage obtenu en allant sur Github` et en appuyant sur le bouton *Clone or Download* du projet
* Le dossier présent sur Github et maintenant téléchargé dans le dossier S01-E03
* Un petit `ls` peut confirmer cela
* Maintenant en tapant `code .` dans le terminal, VSC va s'ouvrir dans le dossier de travail S01-E03 (visible dans le __panneau d'édition/arbo__  de VSC `CTRL+SHIFT+E` pour l'afficher)
* Cela permet d'ouvrir tous les fichiers dans VSC depuis ce panneau sans avoir à les chercher et d'avoir l'arborescence du dossier ou des dossiers sous les yeux
* On ouvre `index.html` et `style.CSS`
* On fait son travail et/ou ses modifications
* Quand on souhaite __sauver/envoyer/indiquer__ ses changements de ces deux fichiers on va via le __terminal__ ou le __terminal de VSC__ (menu *Terminal* puis *New Terminal*) rentrer en communication avec __Github__
* Pour commencer on tape un `git status` pour voir si les fichiers en question on bien été modifiés
* Le Terminal devrait signaler en rouge les fichiers comportants des modifications (il donne aussi l'arborescence des fichiers concernés)
* Ensuite `git add + nomdossier/nomdufichier` (donc par exemple `git add html/index.html`), on valide
* On va commenter ce changement pour s'y retrouver avec un `git commit -m "toncommentaire"` (donc `git commit -m "mon premier jet"`), on valide
* Pour finaliser ce changement on tape `git push` puis on valide
* Un `git status` permet de vérifier si l'envoi s'est bien fait
* Sur l'interface de __Github__ accessible depuis un navigateur on voit bien les changements faits via le bouton *Commit* dans le Repositoire du projet de travail.


***
* le fichier `.gitignore` est un fichier qui peut être édité dans VSC afin d'y mettre le nom des fichiers que GitHub doit ignorer comme __thumbs.db__ ou __DS_Store__
