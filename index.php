<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anniversaire_mariama_11_09_2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="anif.css">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
</head>
<body>
    <div class="container">
        <!-- Section des logos -->
        <div class="logos d-flex justify-content-between align-items-center">
            <img src="fleur.jfif" alt="Fleur" class="img-fluid logo">
            <img src="gateau.jfif" alt="Gâteau d'anniversaire" class="img-fluid logo">
        </div>

        <!-- Section du titre -->
        <div class="text-center mt-4">
            <h1 class="title">Joyeux Anniversaire DJABO MARIAMA</h1>
        </div>

        <!-- Section des images -->
        <div id="image-slider" class="text-center mt-3">
            <img src="mari1.png" alt="Mariam" class="img-fluid rounded-circle">
        </div>

        <!-- Section du message historique -->
        <p id="historique-message">Découvrez en 10 secondes l'historique de l'heureuse du jour</p>

        <!-- Bouton de paiement -->
        <div class="text-center mt-4">
            <button id="pay-btn" class="btn btn-custom btn-primary">Souhaiter Joyeux Anniversaire FCFA</button>
            <div id="success-message" class="mt-3">
                Merci d'avoir souhaité joyeux anniversaire à Mme DOSSOU DJABO Mariama!
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="anif.js"></script>
</body>
</html>
