<?php


namespace BreadAndIfit\Ingredients;


use BreadAndIfit\Interfaces\GatewayInterface;
class IngredientGateway implements GatewayInterface
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
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        $recipes = curl_exec($ch);
        if (curl_error($ch)) {
            $return = 'Something went wrong, please refresh the page and try again.';
        }else{
            $return = $recipes;
        }
        curl_close($ch);
        return $return;
    }

    static public function sendDataReturnResponse(array $ingredients): string
    {
        $recipes = self::sendDataToAPI(self::formatData($ingredients));
        return $recipes;

    }
}
