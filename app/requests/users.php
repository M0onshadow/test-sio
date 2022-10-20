<?php

include_once('/app/config/mysql.php');

function findAllUsers(): array
{

    global $db;
    $query = "SELECT * FROM utilisateurs";

    /** @var PDO $sb **/
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute();

    return $sqlStatement->fetchAll();
}

function findLoginUser(string $email): array | bool
{
    global $db;
    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $sqlStatement = $db->prepare($query);
    $sqlStatement->execute(['email' => $email]);

    return $sqlStatement->fetch();
}


function addUser(string $nom, string $prenom, string $email, string $plainPassword): bool
{
    try {
        global $db;
        $query = "INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)";
        $sqlStatement = $db->prepare($query);
        $sqlStatement->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email, 'password' => password_hash($plainPassword, PASSWORD_DEFAULT)]);
    } catch (PDOException $e) {
        return false;
    }
}
