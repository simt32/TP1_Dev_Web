<html>
    <head>
        <meta charset="utf-8">
        <title>Liste de Poisson</title>
        <link href="main.css" rel="stylesheet">
        <link href="formulaire.css" rel="stylesheet">
    </head>
    <body>
        <h1 id = titre1> La référence des pêcheurs </h1>
        <nav class ="menuHorizontal">
        <ul>
            <li > <a href="Formulaire_Connexion.html">Se connecter</a> </li>
            <li><a href="formulaire_creation.html">Créer un compte</a></li>
        </ul>
        </nav>
        <nav class ="menu">
        <ul>
            <li> <a href="index.html">Accueil</a> </li>
            <li class="active"><a href="liste_Poisson.html">Liste des poissons</a></li>
            <li><a href="Publication_photo.html">Publier une photo</a></li>
            <li><a href="voir_photo.php">Voir les photos</a></li>
            <li> <a href="reference.html">Référence</a> </li>
        </ul>
        </nav>
        <div class="BarDeRecherche">
            <label for="recherche">Rechercher une espèce:</label>
            <input type="search"
                aria-label="recherche">
            <button>Rechercher</button>
        </div>
        <div>
            <table>
                <tr>
                    <th>Poisson</th><th>Poisson</th><th>Poisson</th><th>Poisson<th>Poisson</th>
                </tr>
            <?php
                for ($i=0; $i < 200; $i++) { 
                    echo "<tr>";
                    echo "<td><a href=poisson.html>Poisson</a>$i</td>";
                    echo "<td><a href=poisson.html>Poisson</a>",$i+=1,"</td>";
                    echo "<td><a href=poisson.html>Poisson</a>",$i+=1,"</td>";
                    echo "<td><a href=poisson.html>Poisson</a>",$i+=1,"</td>";
                    echo "<td><a href=poisson.html>Poisson</a>",$i+=1,"</td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </body>
</html>

