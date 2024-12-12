<?php
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plateforme de Gestion d'Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container mt-4">
        <div class="content-wrapper">
            <?php displayMessage(); ?>
            <h1 class="text-center mb-4">Bienvenue sur la Plateforme de Gestion d'Événements</h1>
            
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <p class="lead text-center">Découvrez et participez à des événements passionnants ou créez les vôtres !</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Créez vos événements</h5>
                            <p class="card-text">Organisez facilement vos propres événements en spécifiant tous les détails nécessaires.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Participez aux événements</h5>
                            <p class="card-text">Trouvez des événements intéressants et inscrivez-vous en quelques clics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Interagissez avec les participants</h5>
                            <p class="card-text">Discutez avec d'autres participants et partagez vos expériences.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center mb-4">Pourquoi choisir notre plateforme ?</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Interface conviviale et facile à utiliser</li>
                        <li class="list-group-item">Gestion complète des événements</li>
                        <li class="list-group-item">Système de discussion intégré</li>
                        <li class="list-group-item">Notifications et rappels pour les participants</li>
                        <li class="list-group-item">Sécurité et confidentialité des données</li>
                    </ul>
                </div>
            </div>

            <?php if (!isLoggedIn()): ?>
            <div class="row mt-5">
                <div class="col-md-6 offset-md-3 text-center">
                    <h3>Prêt à commencer ?</h3>
                    <a href="register.php" class="btn btn-primary btn-lg mt-3">Inscrivez-vous maintenant</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>