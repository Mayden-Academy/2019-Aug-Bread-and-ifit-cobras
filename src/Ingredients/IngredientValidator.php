<?php


namespace BreadAndIfit\Ingredients;

class IngredientValidator
{
    /**
     * This method checks user supplied data and validates against criteria
     * @param $post containing user selected ingredients
     * @return bool true if passes validation, otherwise false
     */
    public static function checkUserInput($post): bool
    {
        if (!empty($post)) {
            $checkArray = [];
            foreach ($post as $check) {
                $newCheck = htmlentities($check);
                if (strlen($check) < 25 && !preg_match('/\s/', $check) && $newCheck == $check) {
                    $checkArray[] = true;
                } else {
                    $checkArray[] = false;
                }
            }
            if (!(in_array(false, $checkArray))) {
                return true;
            } else {
                return false;
            }
        }
    }
}