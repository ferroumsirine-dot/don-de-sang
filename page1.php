<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Don de Sang</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
    <nav class="navbar">
        <h1 class="logo">Don de Sang</h1>
        <ul class="nav-links">
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="page1.php">S'inscrire</a></li>
            <li><a href="page2.html">Formulaire</a></li>
            <li><a href="hopitaux.html">Hôpitaux</a></li>
            <li><a href="demandes.html">Demandes</a></li>
            <li><a href="Statistiques.html">Statistiques</a></li>
            <li><a href="info.html">À propos</a></li>
        </ul>
    </nav>
</header>

<section class="register-section">
    <h2>Créer un compte</h2>

    <form class="register-form" method="POST" action="insert.php">
        
        <label>Nom (Username)</label>
        <input type="text" name="username" required>

        <label>Prénom</label>
        <input type="text" name="prenom" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mot de passe</label>
        <input type="password" name="password" required>

        <label>Téléphone</label>
        <input type="text" name="phone" required>

        <label>Groupe sanguin</label>
        <select name="groupe_sanguin" required>
            <option value="">Choisir</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <label>Wilaya</label>
        <input type="text" name="wilaya" required>

        <button type="submit" class="btn">S'inscrire</button>
    </form>
</section>

</body>
</html>