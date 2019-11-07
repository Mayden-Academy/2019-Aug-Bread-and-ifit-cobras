<?php
require('../vendor/autoload.php');

use BreadAndIfit\DbConnector;
use BreadAndIfit\Ingredients\DisplayIngredients;
use BreadAndIfit\Ingredients\IngredientHydrator;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bread and Ifits</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/dist/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<div>
</div>
<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="col-2 flex-sm-fill text-sm-center nav-link" href="#">Recipe Finder</a>
    <a id="title" class="col-8 flex-sm-fill text-sm-center nav-link align-middle" href="#">Bread and Ifits.</a>
    <a class="col-2 flex-sm-fill text-sm-center nav-link" href="#" tabindex="-1" aria-disabled="true">Go to recipe
        book</a>
</nav>
<div class="nav-transform"></div>

<div class="container-fluid">
    <div class="row" id="mainContent">
        <aside class="col-2 justify-content-center">
            <form method="post" id="ingredientsForm">
                <?php
                $db = DbConnector::getDatabase();
                $ingredients = IngredientHydrator::getIngredients($db);
                echo DisplayIngredients::displayIngredients($ingredients);
                ?>
            </form>
            <input class="choice-btn col-2" id="getRecipeBtn" type="submit" value="Get Recipe">
        </aside>
        <main class="col-10">

            <?php
            if (!empty($_POST)){
                echo \BreadAndIfit\Ingredients\DisplayRecipes::outputRecipes(\BreadAndIfit\Ingredients\IngredientGateway::sendDataReturnResponse($_POST));
                // DisplayRecipes::outputRecipes();
//                echo '<div id="mainPannel">
//                    <div class="row recipe mx-auto">
//                        <div class="col-10 col-lg-4">
//                            <img src="../res/images/food.jpg" alt="...">
//                        </div>
//                        <div class="col-10 col-lg-8">
//                            <h5 class="card-title">Card title</h5>
//                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate debitis ea eaque, hic ipsum magnam, nesciunt nobis nulla, quas quibusdam sed vitae voluptate. Autem excepturi laudantium necessitatibus neque rem.</p>
//                            <a id="linkToRecipeBtn" href="#" class="btn btn-primary float-right">Go somewhere</a>
//                        </div>
//                    </div>
//                </div>';
            } else {
                echo '
                 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../res/images/toast1.jpg" class="d-block w-100" alt="Toast!">
                    </div>
                    <div class="carousel-item">
                        <img src="../res/images/ifit1.jpg" class="d-block w-100" alt="half empty cupboard">
                    </div>
                    <div class="carousel-item">
                        <img src="../res/images/toast2.jpg" class="d-block w-100" alt="EVEN MORE toast!">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                ';
            }
            ?>
        </main>
    </div>
</div>
</body>
</html>
