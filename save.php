<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire  
    $nom = htmlspecialchars($_POST['nom']); // Échappe les caractères spéciaux
    $norme = htmlspecialchars($_POST['norme']);
    $lpa = htmlspecialchars($_POST['lpa']);
    $largeurhorstout = htmlspecialchars($_POST['largeurhorstout']); // Échappe les caractères spéciaux
    $hpl = htmlspecialchars($_POST['hpl']);
    $hhta = htmlspecialchars($_POST['hhta']);

    $montage = htmlspecialchars($_POST['montage']); // Échappe les caractères spéciaux
    $rideau = htmlspecialchars($_POST['rideau']);
    $type = htmlspecialchars($_POST['type']);
    $transparence = htmlspecialchars($_POST['transparence']); // Échappe les caractères spéciaux
    $typebavette = htmlspecialchars($_POST['typebavette']);
    $donnéevent = htmlspecialchars($_POST['donnéevent']);
    $ventcalculé = htmlspecialchars($_POST['ventcalculé']); // Échappe les caractères spéciaux
    $classevent = htmlspecialchars($_POST['classevent']);
    $tubeguidage = htmlspecialchars($_POST['tubeguidage']);
    $typebache = htmlspecialchars($_POST['typebache']); // Échappe les caractères spéciaux
    $couleurrideau = htmlspecialchars($_POST['couleurrideau']);
    $hauteurmini = htmlspecialchars($_POST['hauteurmini']);
    $hauteurmaxi = htmlspecialchars($_POST['hauteurmaxi']); // Échappe les caractères spéciaux

    $couleurstructure = htmlspecialchars($_POST['couleurstructure']);
    $tailletraverse = htmlspecialchars($_POST['tailletraverse']);

    $nom = htmlspecialchars($_POST['nom']); // Échappe les caractères spéciaux
    $norme = htmlspecialchars($_POST['norme']);
    $largeurpassage = htmlspecialchars($_POST['largeurpassage']);



    // Créer le contenu HTML pour le nouveau fichier  
    $content = "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Base qr code porte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;#e6f0ff
        }
        h1 {
            color: #333;
	    border: 2px solid blue; /* Ajoute une bordure bleue autour du titre */
            padding: 10px; /* Ajoute un peu d'espace à l'intérieur du cadre */
            background-color: #e6f0ff; /* Optionnel : ajoute une couleur de fond légère */
            border-radius: 5px; /* Optionnel : arrondit les coins du cadre */
        }
	h2 {
	    color: #222;
	    border: 2px solid gray; /* Ajoute une bordure bleue autour du titre */
            padding: 10px; /* Ajoute un peu d'espace à l'intérieur du cadre */
            background-color: #e6f0ff; /* Optionnel : ajoute une couleur de fond légère */
            border-radius: 5px; /* Optionnel : arrondit les coins du cadre */
	}
	h3 {
	    color: #333;
	    border: 2px solid blue; /* Ajoute une bordure bleue autour du titre */
            padding: 10px; /* Ajoute un peu d'espace à l'intérieur du cadre */
            background-color: #e6f0ff; /* Optionnel : ajoute une couleur de fond légère */
            border-radius: 5px; /* Optionnel : arrondit les coins du cadre */
	}


        p {
            color: #555;
	    border: 2px black; /* Ajoute une bordure bleue autour du titre */
            padding: 10px; /* Ajoute un peu d'espace à l'intérieur du cadre */
            background-color: white; /* Optionnel : ajoute une couleur de fond légère */
            border-radius: 5px; /* Optionnel : arrondit les coins du cadre */
        }

	img {
            max-width: 100%; /* S'assure que l'image ne déborde pas de l'écran */
            height: auto; /* Maintient les proportions de l'image */
            margin-top: 20px; /* Ajoute un espace au-dessus de l'image */
        }
    </style>
</head>
<body>
    <img src='nergeco.png' alt='Description de l'image' />
    <h1>Caractéristiques</h1>
    <h2>Nom de la porte</h2>
    <p> $nom</p>
    <h2>Norme européenne</h2>
    <p> $norme</p>
    <h2>Largeur de passage (LPA)</h2>
    <p> $lpa</p>
    <h2>Largeur Hors Tout</h2>
    <p>$largeurhorstout</p>
    <h2>Hauteur Passage Libre (HPL)</h2>
    <p>$hpl</p>
    <h2>Hauteur Hors Tout Abaque (HHTA)</h2>
    <p>$hhtta</p>

    <h1>Rideau</h1>
    <h2>Montage</h2>
    <p>$montage</p>
    <h2>Rideau</h2>
    <p>$rideau</p>
    <h2>Type</h2>
    <p>$type</p>
    <h2>Transparence</h2>
    <p>$transparence</p>
    <h2>Type de Bavette</h2>
    <p>$typebavette</p>
    <h2>Donnée Vent demandée</h2>
    <p>$donnéevent</p>
    <h2>Vent de la porte calculé</h2>
    <p>$ventcalculé</p>
    <h2>Classe au vent de la porte</h2>
    <p>$classevent</p>
    <h2>Tube de guidage</h2>
    <p>$tubeguidage</p>
    <h2>Type de Bache</h2>
    <p>$typebache</p>
    <h2>Couleur Rideau</h2>
    <p>$couleurrideau</p>
    <h2>Hauteur Mini Transparent / Sol</h2>
    <p>$hauteurmini</p>
    <h2Hauteur Maxi Transparent / Sol</h2>
    <p>$hauteurmaxi</p>

    <h1>Structure</h1>
    <h2>Couleur Structure</h2>
    <p>$couleurstructure</p>
    <h2>Taille de la traverse</h2>
    <p>$tailletraverse</p>

    <h1>Motorisation</h1>
    <h2>Type de réducteur</h2>
    <p>-----</p>
    <h2>Taux de réduction</h2>
    <p>-----</p>
    <h2>Puissance Moteur</h2>
    <p>-----</p>
    <h2>Type de frein Moteur</h2>
    <p>-----</p>
    <h2>Vitesse de relevage Maxi (m/s)</h2>
    <p>-----</p>
    <h2>Vitesse Moyenne de relevage (m/s)</h2>
    <p>-----</p>
    <h2>Vitesse à la descente à 2,5m (m/s)</h2>
    <p>-----</p>

    <h1>Armoire</h1>
    <h2>Coffret</h2>
    <p>-----</p>
    <h2>Composants</h2>
    <p>-----</p>
    <h2>Mode de fonctionnement</h2>
    <p>-----</p>
    <h2>Coté armoire</h2>
    <p>-----</p>
    <h2>Distance armoire</h2>
    <p>-----</p>
    <h2>Alimentation TRIPHASE+TERRE</h2>
    <p>-----</p>
    <h2>Fin de course</h2>
    <p>-----</p>
    <h2>Numéro du schéma</h2>
    <p>-----</p>

    <h1>Remontage de secours par contrepoids</h1>
    <h2>Remontage de secours</h2>
    <p>-----</p>

    </body>
</html>";


    // Nom du fichier à créer  
    $filename = 'porte_' . time() . '.html'; // Par exemple : porte_1632958434.html

    // Écrire le contenu dans le fichier  
    if (file_put_contents($filename, $content) !== false) {
        // Redirection vers le fichier créé ou message de succès  
        echo "<h1>Données enregistrées avec succès !</h1>";
        echo "<p>Vous pouvez voir les informations <a href='$filename'>ici</a>.</p>";
    } else {
        echo "<h1>Erreur lors de l'enregistrement des données.</h1>";
        echo "<p>Veuillez vérifier les permissions du répertoire.</p>";
    }
} else {
    echo "<h1>Méthode non autorisée.</h1>";
}
?>