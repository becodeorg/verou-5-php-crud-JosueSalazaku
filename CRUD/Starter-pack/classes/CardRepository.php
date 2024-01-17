<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(array $cardData): void
    {
        try {
            $createQuery = "INSERT INTO pokemon_cards (name, type, rarity, card_set, card_condition) 
                            VALUES (:name, :type, :rarity, :card_set, :card_condition)";
    
            $query = $this->databaseManager->connection->prepare($createQuery);
    
            // Bind parameters with values from $cardData
            $query->execute($cardData);
    
        } catch (PDOException $error) {
            echo $error->getMessage();
            // Handle the error appropriately, you might not want to return an empty array
            // or you can rethrow the exception for the calling code to handle
        }
    }
    
    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        try {
            $selectQuery = "SELECT * FROM pokemon_cards";
            $query = $this->databaseManager->connection->prepare($selectQuery);
            $query->execute();
    
            $data = $query->fetchAll();
            return $data;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return [];
        }
    }
    

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}