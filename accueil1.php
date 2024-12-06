<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon Portfolio - Présentation de mes projets">
    <title>Portfolio</title>

    <style>
        /* Styles CSS */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* En-tête */
        header {
            background-color: #6872c5;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

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
            padding: 10px 15px;
            transition: transform 0.5s ease, color 0.5s ease;
        }

        nav ul li a:hover {
            transform: scale(5);
            color: burlywood;
        }

        /* Section "À propos" */
        #about {
            padding: 100px;
            background-color: #eaeaea;
        }

        /*section p*/
        #about p {
            line-height: 3;
        }

        #about h3 {
            font-weight: normal;
        }

        /* bande basse */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 50px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <h1>Mon Portfolio</h1>
        </div>
        <nav>
            <ul>
                <li><a href="accueil1.php">Accueil</a></li>
                <li><a href="projet1.php">Projets</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section "À propos" sur la page d'accueil -->
    <section id="about">
        <h2>À propos de moi</h2>
        <p>
        <h3>Bonjour, je suis étudiant en BTS SIO (Services Informatiques aux Organisations). J'ai une passion pour la
            gestion de données et le développement d'applications. Grâce à mes études et ayant d'ailleurs choisi
            l'option SLAM (Solutions Logiciels et Applications Métiers) j'ai acquis de bonnes compétences en
            programmation, en conception de bases de données et en développement web. Voici un aperçu de mes
            compétences.</h3>
        </p>
    </section>

    <footer>
        <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
<script>
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
        direction: 'vertical', // vertical, horizontal
        gestureDirection: 'vertical', // vertical, horizontal, both
        smooth: true,
        mouseMultiplier: 1,
        smoothTouch: false,
        touchMultiplier: 2,
        infinite: false,
    })
    //get scroll value
    lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
        console.log({ scroll, limit, velocity, direction, progress })
    })
    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }
    requestAnimationFrame(raf)
</script>

</html>