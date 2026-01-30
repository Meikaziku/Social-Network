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

## Installer le projet avec Tailwind CSS

### 1️⃣ Une fois le projet cloné, dans le terminal tape :
```bash
npm install tailwindcss @tailwindcss/cli
```

### 2️⃣ Ajouter Tailwind à ton CSS

Crée un fichier CSS si tu n’en as pas déjà, par exemple :
src/input.css ou style.css

Et ajoute au début du fichier :
```bash
@import "tailwindcss";
```

### 3️⃣ Compiler Tailwind en CSS prêt à l’emploi

Dans le terminal, exécute :
```bash
npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
```
⚠️ Assure-toi que le chemin est correct selon l’endroit où se trouve tes fichiers CSS.


### Tailwind est installé !
