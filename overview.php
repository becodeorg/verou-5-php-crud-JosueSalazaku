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

<form action="POST">
    <input type="Name" placeholder="ADD POKEMON">
    <button>ADD</button>
</form>

<ul>
    <?php    
    foreach ($cards as $card) : ?>
        <li>
            <hr><strong>Name:</strong> <?= $card['name'] ?><br>
            <strong>Type:</strong> <?= $card['type'] ?><br>
            <strong>Rarity:</strong> <?= $card['rarity'] ?><br>
            <strong>Set:</strong> <?= $card['card_set'] ?><br>
            <strong>Condition:</strong> <?= $card['card_condition'] ?><br>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>