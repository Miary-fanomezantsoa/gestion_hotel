un compte rendu le samedi 7-22-2025

    Cloner le projet pour le dépôt Ouvrez un terminal ou Git Bash etz exécutez cette commande :

git clone https://github.com/Miary-fanomezantsoa/gestion_hotel.git

    Installateur moins dépendances Allez dans le dossier du projet :

cd gestion-hôtel

Ensuite, installez les dépendances avec Composer :

Installation du compositeur

Générez la clé d'application Laravel :

php artisan key:generate

Travaillez sur vos fichiers. N'oubliez pas de test de l'indicateur votre avant de poussoir.

uniques dans

ressource/vues/

Base de données/migrations

app/http/contrôleur

configurer votre .env

DB-CONNECTION-mysql

DB-HOST-127,0.0,1

B-PORT-3306//(verificateur le votre

DB-DATABASE-Gestion-Hôtel

DB-USERNAME// phpadmin d'utilisateur ex root

DB-PASSWORD///votre mot de mot de mouvement phpAdmin

Voiler ne pas toucher au route pour evier les rflies

migrer tous les migrations

php artisan migrer: frais

artisan migrate: francfort -gracie

ou

php artisan migrage

Titser le projet : php artisan serve// executer cice dans l'inive de commande

    Ajouter, committer et pusher vos changements

Une fois vos modifications terminées, additif-les :

Jeu exécuteur ces commandes :

git remote add origin https://changer par le TOKEN 'github.com/Miary-fanomezantsoa/gestion'hotel

git ajouter .

Faites un engagement clair :

git commit -m "Ajout de la fonctionnalité X"

Etz pousse votre branche sur GitHub :

git pousse en origine
