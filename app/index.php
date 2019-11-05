<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bread and Ifits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
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
                                Collapsible Group Item #2
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
                                Collapsible Group Item #3
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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="../res/images/toast1.jpg" class="d-block w-100" alt="Toast!">
                </div>
                <div class="carousel-item active">
                    <img src="../res/images/toast2.jpg" class="d-block w-100" alt="MORE toast!">
                </div>
                <div class="carousel-item">
                    <img src="../res/images/toast3.jpg" class="d-block w-100" alt="EVEN MORE toast!">
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
    </main>
</div>
</div>
</body>
</html>