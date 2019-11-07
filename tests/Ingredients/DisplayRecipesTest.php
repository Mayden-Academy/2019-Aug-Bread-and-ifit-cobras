<?php

require('../src/Ingredients/DisplayRecipes.php');
use BreadAndIfit\Ingredients\DisplayRecipes;
use PHPUnit\Framework\TestCase;


class DisplayRecipesTest extends TestCase
{
    public function testOutputHTML_successWithObjects()
    {
        $array = [];
        $object = new stdClass();
        $object->title = 'Beef Ribs with Fruity Barbecue Sauce';
        $object->href = 'http://www.kraftfoods.com/kf/recipes/beef-ribs-fruity-barbecue-54355.aspx';
        $object->ingredients = 'beef, steak sauce, ketchup, apricot preserves';
        $object->thumbnail = 'http://img.recipepuppy.com/631060.jpg';
        array_push($array, $object);
        $result = DisplayRecipes::outputHTML($array);
        $result = preg_replace('/\s/', "", $result);
        $this->assertContains($result, '\'<divid="mainPannel"><divclass="rowrecipemx-auto"><divclass="col-10col-lg-4"><imgclass="recipe-thumbnail"src="http://img.recipepuppy.com/631060.jpg"alt=""></div><divclass="col-10col-lg-8"><h5class="card-title">BeefRibswithFruityBarbecueSauce</h5><pclass="card-text">Ingredients:beef,steaksauce,ketchup,apricotpreserves</p><aid="linkToRecipeBtn"href="http://www.kraftfoods.com/kf/recipes/beef-ribs-fruity-barbecue-54355.aspx"class="btnbtn-primaryfloat-right">Viewrecipe</a></div></div></div>\')');
    }


    public function testOutputHTML_successWithEmptyArray()
    {
        $result = DisplayRecipes::outputHTML([]);
        $this->assertContains($result, '<div id="mainPannel">
                    <div class="row recipe mx-auto">
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">There are no recipes available which use the ingredient(s) you selected</h5>                  
                        </div>
                    </div>
                </div>');
    }

    public function testOutputHTML_failure()
    {
        $testItem = ['This should not work'];
        $result = DisplayRecipes::outputHTML($testItem);
        $this->assertContains($result, '<div id="mainPannel">
                    <div class="row recipe mx-auto">
                        <div class="col-10 col-lg-8">
                            <h5 class="card-title">There are no recipes available which use the ingredient(s) you selected</h5>                  
                        </div>
                    </div>
                </div>');
    }


    public function testValidateRecipe_success()
    {
        $object = new stdClass();
        $object->results = [];
        $result = DisplayRecipes::validateRecipe($object);
        $this->assertTrue($result);
    }

    public function testValidateRecipe_failure()
    {
        $object = new stdClass();
        $result = DisplayRecipes::validateRecipe($object);
        $this->assertFalse($result);
    }
}
