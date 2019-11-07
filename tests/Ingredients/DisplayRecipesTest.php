<?php

require('../src/Ingredients/DisplayRecipes.php');
use BreadAndIfit\Ingredients\DisplayRecipes;
use PHPUnit\Framework\TestCase;


class DisplayRecipesTest extends TestCase
{
    public function testDisplayRecipes_success() {
        $thing = '{"title":"Recipe Puppy","version":0.1,"href":"http:/www.recipepuppy.com","results":[{"title":"French Bread Sausage Breakfast Roll","href":"http:/www.recipezaar.com/French-Bread-Sausage-Breakfast-Roll-175244","ingredients":"sausage","thumbnail":"http:/img.recipepuppy.com/573680.jpg"}]}';
        $result = DisplayRecipes::outputRecipes($thing);
        $this->assertContains($result, '<div id="mainPannel"><div class="row recipe mx-auto">
                        <div class="col-10 col-lg-4">
                            <img class="recipe-thumbnail" src="http:/img.recipepuppy.com/573680.jpg" alt="">
                        </div>
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">French Bread Sausage Breakfast Roll</h5>
                            <p class="card-text">Ingredients: sausage</p>
                            <a id="linkToRecipeBtn" href="http:/www.recipezaar.com/French-Bread-Sausage-Breakfast-Roll-175244" class="btn btn-primary float-right">View recipe</a>
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






