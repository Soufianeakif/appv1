# appv1

Application Symfony minimale fournie dans ce dépôt.

## Description

Une petite application Symfony (contrôleurs, entités, templates) destinée à démonstration/développement local.

## Prérequis

- PHP 8.x
- Composer
- Une base de données compatible Doctrine (MySQL, MariaDB, etc.)
- (Optionnel) XAMPP / Apache — le projet est placé dans `public/` pour un hôte web standard

## Installation (PowerShell)

1. Installer les dépendances :

   composer install

2. Copier le fichier d'environnement et le configurer :

   copy .env .env.local

   Modifier `DATABASE_URL` dans `.env.local` selon votre configuration.

3. Créer la base de données :

   php bin/console doctrine:database:create

4. Exécuter les migrations :

   php bin/console doctrine:migrations:migrate

5. Charger les fixtures (si présentes) :

   php bin/console doctrine:fixtures:load --no-interaction

## Lancer l'application

- Avec le serveur PHP intégré :

  php -S localhost:8000 -t public

- Ou via votre hôte (Apache/Nginx) en pointant la racine sur le dossier `public/`.

## Structure du projet (rapide)

- `src/` : code PHP (Controller, Entity, Repository, ...)
- `templates/` : vues Twig
- `public/` : point d'entrée web
- `migrations/` : migrations Doctrine

## Tests

Aucun test automatisé n'est inclus pour l'instant.

## Contribuer

Les contributions sont bienvenues : ouvrez une issue ou une PR.

## Licence

Indiquer ici la licence du projet (ex. MIT) si applicable.
