<?php


namespace BreadAndIfit\Ingredients;


class IngredientHydrator
{
    /**
     * This method uses the database connection established in ..\DBConnector to get the ingredients
     * and sets the fetchmode to FETCH_CLASS.
     * @param \PDO $db is the database variable established in DBConnector
     * @return array is the array of objects returned from the DB.
     */
    public static function getIngredients(\PDO $db): array {
        $query = $db->query('SELECT `id`, `name`, `category` FROM ingredients');

        $query->setFetchMode(\PDO::FETCH_CLASS, '\BreadAndIfit\Ingredients\Ingredient');

        $ingredients = $query->fetchAll();

        return $ingredients;
    }
}