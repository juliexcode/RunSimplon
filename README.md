<p align="center"><img src="/public/images/logo.png"></p>

# RUN BY SIMPLON - Installation Projet TuMeGonfles?!

## Adresse projet TuMeGonfles?!
https://tumegonfles-sprint-08.dwwm-12-2021.simplon.re/

_Pré-requis : PHP 8.0, MySQKL et PhpMyAdmin_

## Pour lancer le projet

Récupérer le dépôt :

```sh
git clone https://github.com/juliexcode/RunSimplon.git <nom_de_dossier>
cd <nom_de_dossier>
```

Configurer le fichier `.env` :

```txt
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=<db_name>
DB_USERNAME=<db_user_name>
DB_PASSWORD=<db_password>
```

Installer les dépendances PHP :

```sh
composer install 
```

Lancer le serveur de développement :

```sh
php artisan serve 
```

## Comment est-ce que ce projet a été construit

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

