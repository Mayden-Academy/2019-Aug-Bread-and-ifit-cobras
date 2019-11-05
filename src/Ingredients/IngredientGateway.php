<?php


namespace BreadAndIfit\Ingredients;


use mysql_xdevapi\Exception;

class IngredientGateway
{
    static private function formatData(array $ingredients): string
    {
        $url = "http://www.recipepuppy.co/api/?i=";
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
            $error_msg = curl_error($ch);
            return  $error_msg;
        }else{
        return $recipes;
        }
        curl_close($ch);
    }

    static public function sendDataReturnResponse(array $ingredients): string
    {
        $recipes = self::sendDataToAPI(self::formatData($ingredients));
        return $recipes;

    }
}
