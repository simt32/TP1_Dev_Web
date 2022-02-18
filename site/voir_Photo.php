<html>
    <head>
        <meta charset="utf-8">
        <title>Voir les photos</title>
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
            <li><a href="liste_Poisson.php">Liste des poissons</a></li>
            <li><a href="Publication_photo.html">Publier une photo</a></li>
            <li class="active"><a href="voir_Photo.php">Voir les photos</a></li>
            <li> <a href="reference.html">Référence</a> </li>
        </ul>
        </nav>
        <?php
            for ($i=0; $i < 10; $i++) { 
                echo "<div id=photo>";
                echo "<p>Ma pêche de ce matin</p>";
                echo "<p>";
                echo"<img src=Bar_raye.jpg width=800 height=350/>";
                echo "</p>";
                echo "</div>";
                echo"<div id=centre>";
                echo "<label for=Commentaire> Commentaire : </label><input type=text>";
                echo "<input class=boutonOk type=submit value= envoyé >";
                echo "</div>";
            }   
        ?>  
    </body>
</html>