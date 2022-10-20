<?php


function findAllUsers(PDO $db): array {
    $query="SELECT * FROM utilisateurs";

    /** @var PDO $sb **/
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute();

    return $sqlStatement->fetchAll();
}

function findLoginUser(PDO $db, string $email): array|bool{
    $query="SELECT * FROM utilisateurs WHERE email = :email";
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute(['email' => $email]);
}
?>