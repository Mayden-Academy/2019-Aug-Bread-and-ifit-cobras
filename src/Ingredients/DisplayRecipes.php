<?php


namespace BreadAndIfit\Ingredients;


class DisplayRecipes
{
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

    private static function validateRecipe($recipes): bool
    {
        if (!is_array($recipes)) {
            return false;
        }

        foreach ($recipes as $recipe) {
            foreach ($recipe as $recipeItem) {
                $recipeItem = strval($recipeItem);
                $recipeItem = preg_replace('/[[:^print:]]/', '', $recipeItem);
                $newRecipeItem = htmlentities($recipeItem);
                if ($newRecipeItem != $recipeItem) {
                    var_dump($newRecipeItem);
                    var_dump($recipeItem);
                    return false;
                }
            }
        }

        return true;

    }

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

              var_dump( $recipe->thumbnail);

              $recipeCard .= '<div class="row recipe mx-auto">
                        <div class="col-10 col-lg-4">
                            <img src="' . $recipe->thumbnail . '" alt="...">
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

//          return '<div id="mainPannel">
//                    <div class="row recipe mx-auto">
//                        <div class="col-10 col-lg-4">
//                            <img src="../res/images/food.jpg" alt="...">
//                        </div>
//                        <div class="col-10 col-lg-8">
//                            <h5 class="card-title">Card title</h5>
//                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate debitis ea eaque, hic ipsum magnam, nesciunt nobis nulla, quas quibusdam sed vitae voluptate. Autem excepturi laudantium necessitatibus neque rem.</p>
//                            <a id="linkToRecipeBtn" href="#" class="btn btn-primary float-right">Go somewhere</a>
//                        </div>
//                    </div>
//                </div>';
          // recipe template
      }
    }
}