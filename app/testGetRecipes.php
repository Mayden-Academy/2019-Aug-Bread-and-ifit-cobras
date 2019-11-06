<?php

require '../vendor/autoload.php';

$ingredients = ['beef'];
$recipes = \BreadAndIfit\Ingredients\IngredientGateway::sendDataReturnResponse($ingredients);
echo $recipes;