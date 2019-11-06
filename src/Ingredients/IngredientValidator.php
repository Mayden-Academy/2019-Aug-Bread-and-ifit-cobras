<?php


namespace BreadAndIfit\Ingredients;


class IngredientValidator
{
    public static function checkUserInput($post): bool
    {
        if (!empty($post['check_list'])) {
            $checkArray = [];
            foreach ($post['check_list'] as $check) {
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