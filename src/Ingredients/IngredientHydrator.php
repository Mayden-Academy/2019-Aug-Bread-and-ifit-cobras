<?php


namespace BreadAndIfit\Ingredients;


class IngredientHydrator
{
    public static function getIngredients(\PDO $db): array
    {
        $query = $db->query('SELECT `id`, `name`, `category` FROM ingredients');

        $query->setFetchMode(\PDO::FETCH_CLASS, '\BreadAndIfit\Ingredients\Ingredient');

        $ingredients = $query->fetchAll();

        return $ingredients;
    }
}