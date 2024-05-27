<?php
include 'C:/xampp/htdocs/amdl/composant/connect.php';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Sky Summer - Page d'inscription</title>
    <link rel="stylesheet" href="admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register">
            <h3>Enregistrez-vous</h3>
            <div class="flex">
                <div class="col">
                    <div class="input-field">
                        <p>Votre nom <span>*</span></p>
                        <input type="text" name="name" placeholder="Entrez votre nom" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>Votre Email <span>*</span></p>
                        <input type="email" name="email" placeholder="Entrez votre email" maxlength="50" required class="box">
                    </div>
                </div>
                <div class="col">
                    <div class="input-field">
                        <p>Votre mot de passe <span>*</span></p>
                        <input type="password" name="pass" placeholder="Entrez votre mot de passe" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>Confirmation du mot de passe <span>*</span></p>
                        <input type="password" name="cpass" placeholder="Confirmez votre mot de passe" maxlength="50" required class="box">
                    </div>
                </div>
            </div>
            <div class="input-field">
                <p>Ton Profil
                <input type="file" name="image" accept="image/*" required class="box">
            </div>
            <p class="link">Avez-vous déjà un compte ? <a href="login.php">Connectez-vous</a></p><br><br>
            <input type="submit" name="submit" value="Enregistrez-vous" class="btn">
        </form>
    </div>
    








    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- custom js link -->
    <script src="C:/xampp/htdocs/amdl/js/script.js"></script>
</body>
</html>
