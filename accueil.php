<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon Portfolio - Présentation de mes projets">
    <title>Portfolio</title>

    <!-- Style intégré dans le fichier HTML -->
    <style>
        /* Style global pour le corps de la page */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Style de l'en-tête */
        header {
            background-color: #4f2ca0;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        /* Style du menu de navigation */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Style de la section "À propos" */
        #about {
            padding: 50px;
            background-color: #eaeaea;
        }

        /* Style des projets */
        .projects-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .project {
            background-color: #fff;
            padding: 15px;
            margin: 10px;
            border: 1px solid #ddd;
            width: 30%;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        }

        /* Style du formulaire de contact */
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }

        form input, form textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
        }

        form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Style du footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- En-tête de la page avec un logo et le menu de navigation -->
    <header>
        <div class="logo">
            <h1>Mon Portfolio</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#about">À propos</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section "À propos" pour te présenter -->
    <section id="about">
        <h2>À propos de moi</h2>
        <p>Bonjour, je suis étudiant en BTS SIO, ayant pris l'option SLAM j'ai pu </p>
    </section>

    <!-- Section des projets où les données sont incluses depuis un fichier PHP -->
    <section id="projects">
        <h2>Mes Projets</h2>
        <div class="projects-container">
            <?php
                // Inclusion du fichier contenant les données de projets
                include 'projet.php';

                // Boucle pour afficher chaque projet
                foreach ($projects as $project) {
                    echo "<div class='project'>";
                    echo "<h3>" . $project['title'] . "</h3>";
                    echo "<p>" . $project['description'] . "</p>";
                    echo "<a href='" . $project['link'] . "' target='_blank'>Voir le projet</a>";
                    echo "</div>";
                }
            ?>
        </div>
    </section>

    <!-- Section de contact avec un formulaire -->
    <section id="contact">
        <h2>Contactez-moi</h2>
        <form action="submit.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>

    <!-- Footer de la page -->
    <footer>
        <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
    </footer>

    <!-- Lien vers le fichier JavaScript -->
    <script src="script.js"></script>
</body>
</html>
