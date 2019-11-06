<?php


use BreadAndIfit\Ingredients\DisplayIngredients;
use BreadAndIfit\Ingredients\Ingredient;
use PHPUnit\Framework\TestCase;

require('../src/Ingredients/DisplayIngredients.php');
require('../src/Ingredients/Ingredient.php');

class DisplayIngredientsTest extends TestCase
{
    public function testDisplayIngredients_success()
    {
        $ingredientMock = $this->createMock(Ingredient::class);
        $ingredientMock->expects($this->once())->method('getCategory')->willReturn('Vegetables');
        $ingredientMock->expects($this->once())->method('getName')->willReturn('carrot');

        $result = DisplayIngredients::displayIngredients([$ingredientMock]);

        var_dump($result);

        $this->assertContains($result,
            '<div class="accordion" id="accordionExample"><div class="card">
                        <div class="card-header" id="headingOne">
                             <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVegetables" aria-expanded="true" aria-controls="collapseVegetables">Vegetables</button>
                              </h2>
                        </div>
        
                         <div id="collapseVegetables" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                         <div class="card-body">
                         <ul>
                         <input type="checkbox">carrot</input>
                         </ul>                        
                         </div>
                        </div>
                    </div></div>');
    }
}







////        new class() extends Ingredient {
//            protected $id = 1;
//            protected $name =  'carrot';
//            protected $category = 'Vegetable';
//        };

//        $result = DisplayIngredients::displayIngredients(['Vegetable' => $carrot]);
//

