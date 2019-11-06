<?php

namespace BreadAndIfit\Ingredients;

class DisplayIngredients
{
    /**
     * This method calls the functions below and its purpose is to be called in the index.php to make
     * the accordion of ingredients.
     * @param array $ingredients is the array of objects that came from the database.
     * @return string is the outputted accordion.
     */
    public static function displayIngredients(array $ingredients): string
    {
        $ingredientSorted = self::formatData($ingredients);

        $output = self::outputHTML($ingredientSorted);

        return $output;
    }

    /**
     * This method formats the array of data into a multidimensional associative array of ingredients
     * organised by their category.
     * @param array $ingredients is the array of objects that came from the database.
     * @return array is the formatted array.
     */
    private static function formatData(array $ingredients): array
    {
        $ingredientSorted = [];
        foreach ($ingredients as $ingredient) {
            $ingredientSorted[$ingredient->getCategory()][] = $ingredient->getName();
        }
        return $ingredientSorted;
    }

    /**
     * This method outputs a string containing the html text to produce a bootstrap accordion
     * @param array $ingredientSorted is the multidimensional associative array returned out of
     * FormatData
     * @return string is the formatted accordion using $ingredientSorted.
     */
    private static function outputHTML(array $ingredientSorted): string
    {
        $accordion = '';
        $cats = '';
        foreach ($ingredientSorted as $category => $array) {
            $list = '';
            $cats .= $category . ' ';
            foreach ($array as $key => $value) {
                $list .= '<div><input type="checkbox" value="' . $value . '" name="' . $value . '"><span class="ingredient">'.' '. $value . '</span></input></div>';
            }
            $accordion .= '<div class="card">
                        <a class="card-header" type="button" data-toggle="collapse" data-target="#' . $category . '"
                           aria-expanded="false" aria-controls="' . $category . '">' . $category . '</a>
                        <div class="collapse multi-collapse" id="' . $category . '">
                            <div class="card-body">
                               <ul>' . $list . ' </ul>
                            </div>
                            </div>';
        }
        $accordion .= '</div>';
        $accordion = '<input type="button" class="choiceBtn" id="expandAll" data-toggle="collapse"
                       data-target=".multi-collapse" aria-expanded="false"
                       aria-controls="' . $cats . '" value="Expand All">
                       <div class="accordion" id="accordionExample">' . $accordion;
        return $accordion;
    }
}