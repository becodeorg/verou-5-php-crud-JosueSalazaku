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

    public function create(): void
    {

    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get(): array
    {
        try {
            // TODO: Fetch your data from the database (SELECT query)
            $selectQuery = "SELECT * FROM pokemon_cards";
            $query = $this->databaseManager->connection->prepare($selectQuery);
            $query->execute();
    
            // TODO: Fetch your data at the end of that action.
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
    
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