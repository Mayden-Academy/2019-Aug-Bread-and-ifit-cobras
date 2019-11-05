<?php


namespace BreadAndIfit\Ingredients;


class IngredientGateway
{
    static private function formatData(array $ingredients): string
    {
        $url = "http://www.recipepuppy.com/api/?i=";
        foreach ($ingredients as $ingredient) {
            $url .= $ingredient;
            $url .= ',';
        }
        $url = substr($url, 0, -1);
        return $url;
    }

    static private function sendDataToAPI($url)
    {


    }









    public function sendDataReturnResponse()
    {

    }
}
