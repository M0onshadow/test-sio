<?php

// Validation du formulaire
if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if ($user['email'] === $_POST['email'] && $user['password'] === $_POST['password']) {
            $loggedUser = [
                'email' => $user['email'],
            ];
        } else {
            $errorMessage = sprintf(
                "Les information envoyées ne permettent pas de vous identifier : (%s/%s)",
                $_POST['email'],
                $_POST['password'],
            );
        }
    }
}

?>

<?php if (!isset($loggedUser)) : ?>
    <div class="form-login-area">
        <h1>Connectez-vous</h1>
        <p>Pour avoir accès au site</p>
        <form action="index.php" class="form-login" method="POST">
            <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
<?php endif; ?>