<?php
include 'C:/xampp/htdocs/amdl/composant/connect.php';

if (isset($_POST['submit'])) {

    $id = unique_id();
    $name= $_POST['name'];
    $name=filter_var($name  FILTER_SANITIZE_STRING);
    
    $email=$_POST['email'];
    $email=filter_var($email FILTER_SANITIZE_STRING);


    $pass=sha1($_POST['pass']);
    $pass=filter_var($pass FILTER_SANITIZE_STRING);

    $cpass=sha1($_POST['cpass'])
    $cpass=filter_var($cpass FILTER_SANITIZE_STRING);

    $image=$_FILES['image']['name'];
    $image=filter_var($image FILTER_SANITIZE_STRING);
    $ext=pathinfo($image PATHINFO_EXTENSION);
    $rename=unique_id().'.'.$ext;
    $image_size=$_FILES['image']['size'];
    $image_tmp_name=$_FILES['image']['tmp_name'];
    $image_folder='../uploaded_files/'.$rename;
    $select_seller=$conn- prepare("SELECT * FROM");
    $select_seller- execute([$email]);

    if ($select_seller- rowCount()0) {

        $warning_msg[]='email already exist!';
        }
        else{
            $insert_seller=$conn- prepare("INSERT INTO'sellers'(id name))
             }
             












}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Sky Summer - Page d'inscription</title>
    <link rel="stylesheet" href="style php.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    </style>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register">
            <h3>Enregistrez-vous</h3>
            <div class="flex">
                <div class="col">
                    <div class="input-field">
                        <p>Nom <span>*</span></p>
                        <input type="text" name="name" placeholder="Entrez votre nom" maxlength="50" required class="box">
                    </div>
                    <div class="input-field">
                        <p>Email <span>*</span></p>
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
                <p>Votre profil
                <input type="file" name="eafcac38971a3e58c1596dae7e0f43" accept="C:\Users\pc\Desktop\PROJET WEB\eafcac38971a3e58c1596dae7e0f43.jpg" required class="box">
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
