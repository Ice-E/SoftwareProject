# Projet de Site Web d'Achat d'Appartements en Ligne

Ce projet est un site web développé avec Laravel pour l'achat d'appartements en ligne. Il permet aux utilisateurs de parcourir les appartements disponibles et de passer des commandes.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les logiciels suivants sur votre machine :

- PHP (version 7.4 ou supérieure)
- Composer
- Serveur MySQL (ou utilisez PhpMyAdmin avec XAMPP)

## Installation

1. Clonez ce dépôt sur votre machine en utilisant la commande suivante :

   ```bash
   git clone https://github.com/Ice-E/SoftwareProject.git
   ```

2. Accédez au répertoire du projet :

   ```bash
   cd SoftwareProject
   ```

3. Installez les dépendances du projet avec Composer :

   ```bash
   composer install
   ```

4. Exécutez les migrations pour créer les tables de la base de données :

   ```bash
   php artisan migrate
   ```

## Utilisation

1. Lancez le serveur de développement Laravel :

   ```bash
   php artisan serve
   ```

2. Assurez-vous que votre serveur web (Apache) et votre serveur de base de données (MySQL) sont en cours d'exécution.

3. Accédez à l'URL suivante dans votre navigateur pour utiliser l'application :

   ```
   http://localhost:8000
   ```

## Configuration XAMPP

Si vous préférez utiliser XAMPP, suivez ces étapes supplémentaires :

1. Démarrez Apache et MySQL depuis le panneau de contrôle XAMPP.

2. Accédez à PhpMyAdmin depuis le panneau de contrôle et créez une nouvelle base de données pour le projet.

3. Modifiez le fichier `.env` à la racine du projet pour mettre à jour les informations de base de données avec celles de votre environnement XAMPP.
