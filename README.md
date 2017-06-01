# AccueilSimplon
Création d'un design sympathique pour la page de garde du serveur web commun a la classe !

Pour personnaliser le lien vers votre partie du serveur il faut :
1) aller dans /var/www/monPrenom
2) creer un fichier conf.json
3) ecrire ceci a l'interieur en modifiant ce qu'il faut modifier :
```json
{ "prenom": "Clémence", "nom": "Laffont", "avatar": "avatar.png" }
```
si vous ne voulez pas mettre d'avatar, ne mettez rien entre les guillemet a la place de "avatar.png"
si vous voulez mettre un avatar noté son nom et son extention a la place de "avatar.png" et placer l'image en question au meme niveau que le fichier .json 
