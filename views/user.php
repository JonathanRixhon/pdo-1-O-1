<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $user->fullname ?></title>
</head>

<body>
    <h1><?= $user->fullname ?></h1>
    <p><?= $user->email ?></p>
    <a href="index.php">Retour à la liste des utilisateurs</a>
</body>

</html>