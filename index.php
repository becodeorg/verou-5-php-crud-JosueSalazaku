<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once '/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-php-crud-JosueSalazaku/CRUD/Starter-pack/classes/DatabaseManager.php';
require_once '/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-php-crud-JosueSalazaku/CRUD/Starter-pack/classes/CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
// $cards = $cardRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
// $action = $_GET['action'] ?? null;
$action = $_SERVER['REQUEST_URI'];
$PATH = "/Applications/XAMPP/xamppfiles/htdocs/php/verou-5-php-crud-JosueSalazaku/CRUD/Starter-pack/classes";

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case $PATH:
        overview($cardRepository);
        break;
    case $PATH . 'create':
        create($cardRepository);
        break;
    case $PATH . 'edit':
        echo "Adding...";
        break;
    default:
        overview($cardRepository);
        break;
}

function overview($cardRepository)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    $cards = $cardRepository->get();
    require 'overview.php';
}

function create($databaseManager)
{
    if(isset($_POST['submit'])) {
        $cardRepository = new CardRepository($databaseManager);

        $cardData = [
            'name' => $_POST['name'],
            'type' => $_POST['type'],
            'rarity' => $_POST['rarity'],
            'card_set' => $_POST['card_set'],
            'card_condition' => $_POST['card_condition'],
        ];

        $cardRepository->create($cardData);
    }
    require 'createView.php';
    // TODO: provide the create logic
}