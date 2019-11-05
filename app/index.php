<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <script type="text/javascript" src="js/dist/main.js"></script>

    <?php
    require('../vendor/autoload.php');
    use BreadAndIfit\DbConnector;
    use BreadAndIfit\Ingredients\IngredientHydrator;

    $db = DbConnector::getDatabase();

    $ingredients = IngredientHydrator::getIngredients($db);
    ?>

</head>
<body>

</body>
</html>