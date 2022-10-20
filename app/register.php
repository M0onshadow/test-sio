<?php

session_start();

include_once('config/variables.php');
include_once('requests/users.php');

if (
    !empty($_POST["email"])
    && !empty($_POST["nom"])
    && !empty($_POST["prenom"])
    && !empty($_POST["password"])
) {
    $email = strip_tags($_POST['email']);
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $password = strip_tags($_POST['password']);
}

if (!!$isEmailExist) {
    addUser($nom, $prenom, $email, $password);
} else {
    $errorMessage = "L'email est déjà utilisé par un autre compte.";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $stylePath ?>main.css">
    <link rel="stylesheet" href="<?= $stylePath ?>index.css">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>My app Php</title>
</head>

<body>

    <?php include_once($rootTemplate . 'header.php'); ?>

    <main>
        <section>
            <div class="form-content">
                <form action="<?= $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <div class="form-row">
                        <div class="input-group">
                            <label for="nom">Nom:</label>
                            <input type="text" name="nom" placeholder="Doe">
                        </div>
                        <div class="input-group">
                            <label for="prenom">Prénom:</label>
                            <input type="text" name="prenom" placeholder="John">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="johndoe@yourcompany.com" required>
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe:</label>
                            <input type="password" name="password" placeholder="Votre super mot de passe !" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </section>
    </main>

    <?php include_once($rootTemplate . 'footer.php'); ?>

</body>

</html>