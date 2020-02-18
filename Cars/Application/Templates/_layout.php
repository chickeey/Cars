<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= APPLICATION ?>Style/style.css" type="text/css">
    <title><?= $page ?></title>
</head>
<body>
    <?php require_once APPLICATION.'Templates/headerView.php' ?>
    <?php require_once APPLICATION."Templates/{$page}View.php" ?>
</body>
</html>