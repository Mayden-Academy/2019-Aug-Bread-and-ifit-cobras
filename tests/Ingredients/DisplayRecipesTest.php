<?php

require('../src/Ingredients/DisplayRecipes.php');
use BreadAndIfit\Ingredients\DisplayRecipes;
use PHPUnit\Framework\TestCase;


class DisplayRecipesTest extends TestCase
{
    public function testDisplayRecipes_success() {
        $thingArray = [];
        $thing = new stdClass();
        $thing->title = 'Beef Ribs with Fruity Barbecue Sauce';
        $thing->href = 'http://www.kraftfoods.com/kf/recipes/beef-ribs-fruity-barbecue-54355.aspx';
        $thing->ingredients = 'beef, steak sauce, ketchup, apricot preserves';
        $thing->thumbnail = 'http://img.recipepuppy.com/631060.jpg';
        array_push($thingArray, $thing);
        $result = DisplayRecipes::outputRecipes($thingArray);
        $this->assertContains($result, '<div id="mainPannel"><div class="row recipe mx-auto">
                        <div class="col-10 col-lg-4">
                            <img class="recipe-thumbnail" src="http://img.recipepuppy.com/631060.jpg" alt="">
                        </div>
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">Beef Ribs with Fruity Barbecue Sauce</h5>
                            <p class="card-text">Ingredients: beef, steak sauce, ketchup, apricot preserves</p>
                            <a id="linkToRecipeBtn" href="http://www.kraftfoods.com/kf/recipes/beef-ribs-fruity-barbecue-54355.aspx" class="btn btn-primary float-right">View recipe</a>
                        </div>
                    </div></div>');
    }
    public function testDisplayRecipes_failure() {
    $thing = 'anything';
    $result = DisplayRecipes::outputRecipes($thing);
    $this->assertContains($result, '<div id="mainPannel">
                    <div class="row recipe mx-auto">
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">Invalid response received from puppy API</h5>                   
                        </div>
                    </div>
                </div>');
}
}






