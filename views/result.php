<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/carspeed.avif">
    <style>
        body {
            background-image: url('images/car.jpg');
            background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le viewport */
            background-position: center; /* Centre l'image horizontalement */
            background-repeat: no-repeat; /* Empêche la répétition de l'image */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
        }

        h1 {
            color:blue;
        }

        img {
            width: 100px; /* Ajustez la largeur de l'image selon vos besoins */
            height: auto;
            margin-top: 20px; /* Espace entre l'image et le texte */
        }

        .back-btn {
            margin-top: 20px; /* Adjust the margin as needed */
            text-decoration: none;
            background-color: #3498db; /* Button color */
            color: white; /* Button text color */
            padding: 10px 20px; /* Button padding */
            border-radius: 5px; /* Button border radius */
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #2980b9; /* Button color on hover */
        }
    </style>
    <title>Confirmation de demande</title>
</head>
<body>

<div class="container">
    <h1>Votre demande <?= $car ?> bientôt arrive</h1>
    <a href="index.php" class="back-btn">Retour à la page d'accueil</a>
</div>

</body>
</html>
