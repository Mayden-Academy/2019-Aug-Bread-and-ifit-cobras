<?php


namespace BreadAndIfit\Ingredients;


class IngredientGateway
{
    static private function formatData(array $array) {
        $url = "http://www.recipepuppy.com/api/?i=";
        foreach ($array as $ingedient) {
            $url += $ingredient;
            $url += ',';
        }

    }

}