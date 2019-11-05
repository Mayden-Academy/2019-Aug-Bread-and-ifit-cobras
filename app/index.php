<?php
require '../vendor/autoload.php';

$ingredients = ['cabbage', 'chicken'];
echo (\BreadAndIfit\Ingredients\IngredientGateway::formatData($ingredients));
