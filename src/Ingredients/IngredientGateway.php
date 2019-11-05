<?php


namespace BreadAndIfit\Ingredients;


class IngredientGateway
{
    static private function formatData(array $array) {
        $url = "http://www.recipepuppy.com/api/?i=";
        foreach ($array as $ingredient) {
            $url .= $ingredient;
            $url .= ',';
        }
        $url = substr($url,0,-1);
        return $url;
    }

}