<?php

require('../src/Ingredients/IngredientValidator.php');

use BreadAndIfit\Ingredients\IngredientValidator;
use PHPUnit\Framework\TestCase;

class IngredientValidatorTest extends TestCase
{
    public function testCheckUserInput_success()
    {
        $result = IngredientValidator::checkUserInput(['check_list' => ['onions', 'carrots']]);
        $this->assertEquals($result, true);
    }

    public function testCheckUserInput_failure()
    {
        $result = IngredientValidator::checkUserInput(['check_list' => ['oni ons', 'carrots']]);
        $this->assertEquals($result, false);
    }
}
