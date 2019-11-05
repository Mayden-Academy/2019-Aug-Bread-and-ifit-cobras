<?php


namespace BreadAndIfit\Ingredients;


class IngredientHydrator
{
    public static function getIngredients($db) {
        $query = $db->query('SELECT `id`, `name` FROM ingredients');

        $ingredients = $query->fetchAll();

        return $ingredients;
    }

//    public static function

}