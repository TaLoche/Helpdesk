# Télécharger Wordpress


### Sous linux
1.1 :

[Télécharger sur le site ! ](https://fr.wordpress.org/download/)

1.2 :

Extraire dans le dossier html 

1.3 :

Faire les 3 commandes ci-dessous pour ouvrir les droits
<details>

```
sudo chgrp -R www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
```

</details>


2 :

Aller dans phpMyAdmin crée un nouvel utilisateur 

2.1 :

Ouvrir localhost/wordpress/

2.2 :

Suivre les étapes/renseigner les bons champs

2.3 :
Retournez sur localhost/wordpress ou se connecter avec les informations données précédemment

HELP :

un petit lien [Github](https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/wp/installation.md) pour vous aider