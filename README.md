# AccueilSimplon

Création d'un site vitrine représentatif du travail effectué par les apprenants de Simplon Villeurbanne pour faciliter leur recrutement. Le but est de présenter le programme et les méthodes d'apprentissages ainsi que de référencer les portfolios de tout les élèves dans un catalogue de profils. Ce site sera un lien direct entre les recruteurs et le travail des apprenants.


## Tuto à destination de l'Admin du serveur 

Toi qui connais l'identifiant et le mot de passe du compte qui peut tout faire sur le serveur de SimplonLyon, toi qui dois surement etre le plus balèze en admin système de tout les apprenant de ta promo, ceci est pour toi !

Pour commencer, va voir [cette page](https://github.com/sorlinV/server_simplon3) si tu es curieux de savoir comment le serveur à été créé/configuré.

Ensuite, voici la marche a suivre pour créer un environnement ou les apprenants de ta promo pourront mettre leur portfolio :



## Tuto à destination des Apprenants

![alt text](http://url/to/img.png)

Pour personnaliser le lien vers votre partie du serveur il faut :
1) aller dans ~/www/
2) creer un fichier conf.json
3) ecrire ceci a l'interieur en modifiant ce qu'il faut modifier :
```json
{ "prenom": "Clémence", "nom": "Laffont", "avatar": "avatar.png" }
```
si vous ne voulez pas mettre d'avatar, ne mettez rien entre les guillemet a la place de "avatar.png"
si vous voulez mettre un avatar noté son nom et son extention a la place de "avatar.png" et placer l'image en question au meme niveau que le fichier .json 
