<?php

session_start();

include_once('../config/variables.php');
include_once('../config/mysql.php');
include_once('../requests/users.php');

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
            <h1>
                Administration du site
            </h1>
        </section>
    </main>

    <?php include_once($rootTemplate . 'footer.php'); ?>

</body>

</html>