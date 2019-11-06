<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bread and Ifits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/dist/main.js"></script>
</head>
<body>
<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="col-3 flex-sm-fill text-sm-center nav-link" href="#">Recipe Finder</a>
    <a id="title" class="col-6 flex-sm-fill text-sm-center nav-link align-middle" href="#">Bread and Ifits.</a>
    <a class="col-3 flex-sm-fill text-sm-center nav-link" href="#" tabindex="-1" aria-disabled="true">Go to recipe
        book</a>
</nav>
<div class="nav-transform"></div>

<div class="container-fluid">
<div class="row" id="mainContent">
    <aside class="col-3 justify-content-center">
        <form>
            <input class="choiceBtn " id="getReciepeBtn" type="submit" value="Get Recipe"><br>
            <input class="choiceBtn" id="expandAll" type="submit" value="Expand All">


            <div class="accordion " id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                Vegetables
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            <input type="checkbox" value="tomato" name="tomato"><span class="ingredient"> tomato</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Dairy
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Sample text 2.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Meat
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample">
                        <div class="card-body">
                            Sample text 3.
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </aside>


    <main class="col-9">
        <div id="mainPannel">
            <div class="row recipe">
                <div class="col-10 col-lg-4">
                    <img src="../res/images/food.jpg" alt="...">
                </div>
                <div class="col-10 col-lg-8">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate debitis ea eaque, hic ipsum magnam, nesciunt nobis nulla, quas quibusdam sed vitae voluptate. Autem excepturi laudantium necessitatibus neque rem.</p>
                    <a id="linkToRecipeBtn" href="#" class="btn btn-primary float-right">Go somewhere</a>
                </div>
            </div>
            <div class="row recipe">
                <div class="col-10 col-lg-4">
                    <img src="../res/images/food.jpg" alt="...">
                </div>
                <div class="col-10 col-lg-8">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate debitis ea eaque, hic ipsum magnam, nesciunt nobis nulla, quas quibusdam sed vitae voluptate. Autem excepturi laudantium necessitatibus neque rem.</p>
                    <a id="linkToRecipeBtn" href="#" class="btn btn-primary float-right">Go somewhere</a>
                </div>
            </div>

            <div class="row recipe">
                <div class="col-10 col-lg-4">
                    <img src="../res/images/food.jpg" alt="...">
                </div>
                <div class="col-10 col-lg-8">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate debitis ea eaque, hic ipsum magnam, nesciunt nobis nulla, quas quibusdam sed vitae voluptate. Autem excepturi laudantium necessitatibus neque rem.</p>
                    <a id="linkToRecipeBtn" href="#" class="btn btn-primary float-right">Go somewhere</a>
                </div>
            </div>
        </div>


<!--        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">-->
<!--            <div class="carousel-inner">-->
<!--                <div class="carousel-item">-->
<!--                    <img src="../res/images/toast1.jpg" class="d-block w-100" alt="Toast!">-->
<!--                </div>-->
<!--                <div class="carousel-item active">-->
<!--                    <img src="../res/images/ifit1.jpg" class="d-block w-100" alt="half empty cupboard">-->
<!--                </div>-->
<!--                <div class="carousel-item">-->
<!--                    <img src="../res/images/toast2.jpg" class="d-block w-100" alt="EVEN MORE toast!">-->
<!--                </div>-->
<!--            </div>-->
<!--            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Previous</span>-->
<!--            </a>-->
<!--            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
<!--                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Next</span>-->
<!--            </a>-->
<!--        </div>-->
    </main>
</div>
</div>
</body>
</html>
