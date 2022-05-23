<p align="center"><img src="/public/images/logo.png"></p>

<p align="center"><h2>RUN BY SIMPLON - Installation Projet TuMeGonfles?!</h2></p>

_Pré-requis : PHP 8.0, MySQKL et PhpMyAdmin_

Ouvrir une fenêtre Terminal

#### Étape 1 - Installation projet Laravel

`composer create-project --prefer-dist laravel/laravel TuMeGonfles`

Puis accéder au dossier ‘TuMeGonfles’

#### Étape 2 – Configuration

Ouvrir le fichier "`.env`" dans le dossier ‘TuMegonfles’ et renseigner les champs suivant :

>1 DB_CONNECTION=mysql  
>2 DB_HOST=127.0.0.1  
>3 DB_PORT=3306  
>4 DB_DATABASE=db name  
>5 DB_USERNAME=db user name  
>6 DB_PASSWORD=db password  

#### Étape 3 – Installation Laravel UI

Installation du package LARAVEL ui dans votre dossier : 

`composer require laravel/ui`

#### Étape 4 – Installation du squelette Bootstrap Auth

Installation du package Bootstrap Auth:

`php artisan ui bootstrap --auth`

#### Étape 5 – Installation du Package Npm

`npm install`  
Puis executer npm:  
`npm run dev`

#### Étape 6 – Récupérer les fichiers  
Faire un git clone

#### Étape 7 – Création de la base de données
ensuite lancer la commande : 
`php artisan migrate`

Envoi de données dans la base, taper la commande :  

`php artisan db:seed --class=UsersTableSeeder`

