<?php


namespace BreadAndIfit\Ingredients;


class DisplayIngredients
{
    public static function displayIngredients($ingredients) {

        $ingredientSorted = self::formatData($ingredients);

        $output = self::outputHTML($ingredientSorted);

        return $output;

    }

    private static function formatData($ingredients) {
        $ingredientSorted = [];
        foreach ($ingredients as $ingredient) {
            $ingredientSorted[$ingredient->getCategory()][] = $ingredient->getName();
        }
        return $ingredientSorted;
    }

    private static function outputHTML($ingredientSorted) {
        $accordion = '<div class="accordion" id="accordionExample">';
        foreach ($ingredientSorted as $category => $array){
            $list = '';
            foreach ($array as $key => $value){
                $list .= '<li>'.$value.'</li>';
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
                    </div> 
                </div>';
        }
        echo $accordion;
    }



}

