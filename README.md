# Site TPgroup 3ISystem
###

## Commande Git
Passage du fichier dans l'index
```
git add nom_fichier
```

Envoie dans le dépot local
```
git commit -m "Descritpion de la modification"
```

Envoie vers le depot Github (une fois la premiere connection effectuer)
```
git push
```

###
## Commande lancement container Docker :
```
docker run -d -p 80:80 --name TPgroup -v "$PWD":/var/www/html php:7.2-apache
```
###