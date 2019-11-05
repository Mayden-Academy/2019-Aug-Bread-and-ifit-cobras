<?php


use BreadAndIfit\Ingredients\DisplayIngredients;
use BreadAndIfit\Ingredients\Ingredient;
use PHPUnit\Framework\TestCase;

require('../../src/Ingredients/DisplayIngredients.php');
require('../../src/Ingredients/Ingredient.php');

$carrot = new class() extends Ingredient {
    protected $id = 1;
    protected $name =  'carrot';
    protected $category = 'Vegetable';
};

class DisplayIngredientsTest extends TestCase
{
    public function testDisplayIngredients()
    {
        $carrot = new class() extends Ingredient {
            protected $id = 1;
            protected $name =  'carrot';
            protected $category = 'Vegetable';
        };

        $result = DisplayIngredients::displayIngredients(['Vegetable' => $carrot]);

        $this->assertEquals($result,
            '<div class="accordion" id="accordionExample"><div class="card">
                        <div class="card-header" id="headingOne">
                             <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVegetable" aria-expanded="true" aria-controls="collapseVegetable">Vegetable</button>
                              </h2>
                        </div>
        
                         <div id="collapseVegetable" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                         <div class="card-body">
                         <ul>
                         <input type="checkbox">carrot</input>
                         </ul>                        
                         </div>
                        </div>
                    </div></div>');
    }
}
