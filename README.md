# Liste de personnages d'une guilde

Application permettant à l'utilisateur de pouvoir organiser et regroupper les personnages de sa guilde par classe ou par spécialisation.
Possibilité d'ajouter un personnage de sa guilde ainsi que de le modifier.


## Requis:

Dans le but d'utiliser ce logiciel, vous aurez besoin de:
- Visual Studio Code
- MySQL Workbench
- Laravel 8.0
- Bootstrap 4.5
- PHP 7.4

## Installation

Créer un schéma dans mySQL Workbench.
Remplir le .env avec le nom du schéma, et vos identifiants de connexion à la base de données.
Lancer:
`composer install` 
`php artisan key:generate`
`php artisan migrate`
`php artisan db:seed`

Lancer le serveur:
`php artisan serve`
