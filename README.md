# 🌐 Réseau social interactif (Projet de formation)

**Réseau social interactif** développé dans le cadre de ma formation.  
La plateforme permet aux utilisateurs de **partager leur humeur**, accompagnée de **textes et d’images**, dans une interface simple, fluide et réactive.

Ce projet m’a permis de consolider mes compétences en **PHP** et **JavaScript**, ainsi que dans la conception d’interfaces dynamiques orientées utilisateur.

---

## 🚀 Fonctionnalités principales

### 👤 Connexion simplifiée
- Pas de système d’inscription complexe
- Connexion via **nom d’utilisateur uniquement**

---

### 📝 Publications (Posts)
Les utilisateurs peuvent :
- Publier un message exprimant leur humeur
- Ajouter une image à un poste
- Visualiser les publications des autres utilisateurs

---

### ❤️ Likes & 💬 Commentaires
- Système de **likes** sur les publications
- Ajout de **commentaires** en temps réel
- Mise à jour dynamique sans rechargement de page

---

### 👤 Page de profil utilisateur
Chaque utilisateur dispose d’une **page de profil dédiée** avec :
- Photo de profil (modifiable)
- Bannière personnalisable
- Affichage de l’ensemble de ses publications
- Interface claire et responsive

## 🚀 Installation du projet Social Network

Suivez ces étapes pour lancer le projet en local :

### 1️⃣ Cloner le projet
dans le temrinal : 
```bash
git clone https://github.com/Meikaziku/luxury-service.git ./
```

### 2️⃣ Installer Tailwind CSS
dans le temrinal : 
```bash
npm install tailwindcss @tailwindcss/cli
```

### 3️⃣ Compiler Tailwind en CSS prêt à l’emploi
dans le temrinal : 
```bash
npx tailwindcss -i ./style/style.css -o ./style/output.css --watch
```

### 4️⃣ Importer la base de données
Ouvrer le dossier du projet, récupérer le fichier social_network.sql dans le dossier bdd à la racine. 
Creer ensuite une base de données et importez ce fichier.

### 5️⃣ Modifier le fichier /utils/db-connect.php :
```bash
$user = 'user';
$password = 'password';
$dsn = 'mysql:host=localhost;dbname=social_network';
```
Dans le dbname du dsn, entrer le nom de votre base de donnée creer auparavant




