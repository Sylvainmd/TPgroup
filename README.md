#Commande lancement container Docker :
docker run -d -p 80:80 --name TPgroup -v "$PWD":/var/www/html php:7.2-apache