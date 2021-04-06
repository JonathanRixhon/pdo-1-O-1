<?php
function getConnection(): PDO
{
    //vérification de connection avec le try{}
    try {
        //Création de la conneion à la DB via l'URL en paramètres
        $connection = new PDO('sqlite:' . DB_PATH);
        //assurer la gestion d'erreur de PDO
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //les :: montrent les PROPRIÉTÉ de classe
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //PDO::FETCH_ASSOC est la manière dont seront agencées les données
        // on gère nos préférences pour montrer de quelle manière on gère les erreurs
    } catch (PDOException $e) {
        //on récupère l'erreur et on fait en sorte de couper la page 
        //et d'afficher celle-ci proprement
        die($e->getMessage());
    }
    return $connection;
}
