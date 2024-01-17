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
    $cards = [
        [
            'name' => 'Pikachu',
            'type' => 'Electric',
            'rarity' => 'Common',
            'set' => 'Base Set',
            'condition' => 'Near Mint',
        ],
        [
            'name' => 'Charizard',
            'type' => 'Fire',
            'rarity' => 'Rare Holo',
            'set' => 'Base Set',
            'condition' => 'Excellent',
        ],
        [
            'name' => 'Blastoise',
            'type' => 'Water',
            'rarity' => 'Rare Holo',
            'set' => 'Base Set',
            'condition' => 'Good',
        ],
    ];
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