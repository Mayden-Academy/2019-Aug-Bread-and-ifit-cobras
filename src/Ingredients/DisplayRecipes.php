<?php


namespace BreadAndIfit\Ingredients;


class DisplayRecipes
{
    /**
     *takes the JSON data returned from the API request and returns a string with HTML markup
     *
     * @param $json API response in JSON format
     * @return string relevant recipes based on user selected ingredients or a error message string
     */
    public static function outputRecipes($json)
    {
        $recipes = json_decode($json)->results;

        $validate = self::validateRecipe($recipes);

        if ($validate) {
            return self::outputHTML($recipes);
        } else {
            return '<div id="mainPannel">
                    <div class="row recipe mx-auto">
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">Invalid response received from puppy API</h5>                   
                        </div>
                    </div>
                </div>';
        }
    }

    /**
     *Checks that the JSON_decode function has returned a valid decoded array of recipe data
     *
     * @param $recipes an array that is returned after running through the JSON_decode function which should contain an array of recipe data
     * @return bool returns boolean to show whether the response data from the API is in a valid format
     */
    private static function validateRecipe($recipes): bool
    {
        if (!is_array($recipes)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     *Checks that the valid array returned contains a minimum of one item, if it does it combines HTML markup and JSON data to send to the browser
     *
     * @param $recipes a valid array of recipe data
     * @return string of html to be rendered on the page
     */
    private static function outputHTML($recipes): string
    {
        if (count($recipes) == 0) {
            return '<div id="mainPannel">
                    <div class="row recipe mx-auto">
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">There are no recipes available which use the ingredient(s) you selected</h5>                  
                        </div>
                    </div>
                </div>';
        } else {

            $recipeCard = '<div id="mainPannel">';

            foreach ($recipes as $recipe) {
                if (!$recipe->thumbnail) {
                    $recipe->thumbnail = '../res/images/noRecipe.jpg';
                }
                $recipeCard .= '<div class="row recipe mx-auto">
                        <div class="col-10 col-lg-4">
                            <img class="recipe-thumbnail" src="' . $recipe->thumbnail . '" alt="">
                        </div>
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">' . $recipe->title . '</h5>
                            <p class="card-text">Ingredients: ' . $recipe->ingredients . '</p>
                            <a id="linkToRecipeBtn" href="' . $recipe->href . '" class="btn btn-primary float-right">View recipe</a>
                        </div>
                    </div>';
            }
            $recipeCard .= '</div>';

            return $recipeCard;
        }
    }
}
