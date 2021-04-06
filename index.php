<?php
require('./configs/config.php');
require('./utils/dbaccess.php');
require('./models/user.php');
//connexion à la db
$connection = getConnection();
//redirection en fonction de l'id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = find($connection, $id);
    //redirection
    $view = 'user';
} else {
    $users = all($connection);
    //redirection
    $view = 'users';
}

require('views/' . $view . '.php');
