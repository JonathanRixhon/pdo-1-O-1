<?php
function all($connection): array
{
    // écriture de la requête et exécution
    $usersRequest = 'SELECT * FROM users';
    $pdoSt = $connection->query($usersRequest); //exécute la requête sur le serveur et retourne un objet qui est un PDO statement
    //Récupérer les données qui sont dans le pdo statement
    return $pdoSt->fetchAll();
}
function find(PDO $connection, string $id): stdClass
{
    // écriture de la requête
    $userRequest = 'SELECT * FROM users WHERE id=:id'; //le :id est le "gabarit" de la requête, il sera remplacé par la suite
    $pdoSt = $connection->prepare($userRequest); //préparation de la requête retourne un pdo statement
    $pdoSt->execute([':id' => $id]); //on précise que le gabarit :id correspond $id dans un array
    return $pdoSt->fetch(); // récupère la première ligne de la requête


}
