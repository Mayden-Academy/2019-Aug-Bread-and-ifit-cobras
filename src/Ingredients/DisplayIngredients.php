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
     * @param array $ingredientSorted is the multidimensional associative array returned out of
     * FormatData
     * @return string is the formatted accordion using $ingredientSorted.
     */

    private static function outputHTML(array $ingredientSorted): string
    {
        $accordion = '<div class="accordion" id="accordionExample">';
        foreach ($ingredientSorted as $category => $array){
            $list = '';
            foreach ($array as $key => $value){
                $list .= '<input type="checkbox" id="'.$value.'" name="check_list[]" value="'.$value.'">'.$value.'</input>';
            }
        $accordion .= '<div class="card">
                        <div class="card-header" id="headingOne">
                             <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$category.'" aria-expanded="true" aria-controls="collapse'.$category.'">'
                                    . $category .
                                '</button>
                              </h2>
                        </div>
        
                         <div id="collapse'.$category.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                         <div class="card-body">
                         <ul>
                         ' . $list . '
                         </ul>                        
                         </div>
                        </div>
                    </div>';
        }
        $accordion .= '</div>';
        return $accordion;
    }
}

