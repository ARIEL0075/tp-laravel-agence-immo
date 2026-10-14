# 🏡 Agence Immobilière - TP Laravel (Grafikart)

Projet d'application web d'agence immobilière développé avec *Laravel, réalisé dans le cadre de la formation **Grafikart*.


## 🚀 Fonctionnalités
- Consultation des biens immobiliers disponibles
- Recherche et filtrage avancé des biens (prix, surface, nombre de pièces)
- Espace d'administration (CRUD pour la gestion des biens et des options)
- Formulaire de contact pour les demandes de visite et de renseignements

## 🛠️ Technologies utilisées
- *Backend :* PHP / Laravel
- *Base de données :* MySQL
- *Frontend :* Bootstrap, HTML5, CSS3

## 🔧 Installation en local

1. *Cloner le projet :*
   ```bash
   git clone https://github.com/Ariel0075/tp-laravel-agence-immo
   cd tp-laravel-agence-immo

2. Installer les dépendances PHP :
composer install
 
3. Configurer le fichier d'environnement :
cp .env.example .env
php artisan key:generate

4. Exécuter les migrations et alimenter la base de données :
php artisan migrate

5. Lancer le serveur de développement :
php artisan serve