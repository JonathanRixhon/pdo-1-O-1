<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les utilisateurs</title>
</head>

<body>
    <h1>Tous les utilisateurs</h1>
    <!-- affichage des users -->
    <?php if ($users) : ?>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li><a href="?id=<?= $user->id ?>"><?= $user->fullname ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>


</html>