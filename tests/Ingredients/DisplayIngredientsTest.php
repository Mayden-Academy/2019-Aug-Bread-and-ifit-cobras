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

        $this->assertContains($result,
            '<input type="button" class="choiceBtn" id="expandAll" data-toggle="collapse"
                       data-target=".multi-collapse" aria-expanded="false"
                       aria-controls="Vegetables " value="Toggle All">
                       <div class="accordion" id="accordionExample"><div class="card">
                        <a class="card-header" type="button" data-toggle="collapse" data-target="#Vegetables"
                           aria-expanded="false" aria-controls="Vegetables">Vegetables</a>
                        <div class="collapse multi-collapse" id="Vegetables">
                            <div class="card-body">
                               <ul><label><input type="checkbox" value="carrot" name="carrot"><span class="ingredient"> carrot</span></label></ul>
                            </div>
                            </div></div>');
    }
}