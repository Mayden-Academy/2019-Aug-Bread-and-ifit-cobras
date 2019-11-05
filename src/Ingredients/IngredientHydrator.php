<?php


namespace BreadAndIfit\Ingredients;


class IngredientHydrator
{
    public static function getIngredients($db) {
        $query = $db->query('SELECT `id`, `name` FROM ingredients');

        $query->setFetchMode(\PDO::FETCH_CLASS, 'Ingredient');

        $ingredients = $query->fetchAll();

        return $ingredients;
    }
}