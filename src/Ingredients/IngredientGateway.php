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

    static private function sendDataToAPI(string $url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $recipes = curl_exec($ch);
        curl_close($ch);
        return $recipes;
    }

    static public function sendDataReturnResponse(array $ingredients): string
    {
        $recipes = self::sendDataToAPI(self::formatData($ingredients));
        return $recipes;
    }
}
