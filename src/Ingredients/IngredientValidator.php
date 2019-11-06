<?php


namespace BreadAndIfit\Ingredients;


class IngredientValidator
{
    public static function checkUserInput()
    {
        if (!empty($_POST['check_list'])) {
//            var_dump($_POST['check_list']);
            $checkArray = [];
            foreach ($_POST['check_list'] as $check) {
                $check = htmlentities($check);
                if (strlen($check) > 25 || preg_match('/\s/', $check)) {
                    $checkArray[] = false;
                } else {
                    $checkArray[] = true;
                }
           }
        }
    }
}