<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

<ul>
    <?php
    // dummy Data
    $cards = [];
    foreach ($cards as $card) : ?>
        <li>
            <strong>Name:</strong> <?= $card['name'] ?><br>
            <strong>Type:</strong> <?= $card['type'] ?><br>
            <strong>Rarity:</strong> <?= $card['rarity'] ?><br>
            <strong>Set:</strong> <?= $card['set'] ?><br>
            <strong>Condition:</strong> <?= $card['condition'] ?><br>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>