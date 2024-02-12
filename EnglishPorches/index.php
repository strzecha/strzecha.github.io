<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Porches</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/custom-primary.css">
</head>
  <body class="bg-secondary">
    <?php 
      include 'header.php';
      show_header("main");
    ?>
    
    <section class="porches d-flex flex-nowrap">
    <div class="d-md-flex flex-column flex-shrink-0 p-3 text-bg-dark bg-primary d-none">  
            <span class="fs-4">Products</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link main-nav-link" aria-current="page">
                <i class="icon-basket"></i>Porches
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" aria-current="page">
                Wedding Porches
                </a>
            </li>
            <hr>
            <li>
                <a href="#" class="nav-link main-nav-link">
                <i class="icon-basket"></i>Gazebos
                </a>
            </li>
            <a href="#" class="nav-link" aria-current="page">
                Oak Hot Tub Gazebos
                </a>
            <hr>
            <li>
                <a href="#" class="nav-link main-nav-link">
                <i class="icon-basket"></i>Pergolas
                </a>
            </li>
            <hr>
            <li>
                <a href="#" class="nav-link main-nav-link">
                <i class="icon-basket"></i>Trusses
                </a>
            </li>
            <hr>
            </ul>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 text-body bg-light mt-3">
                    <div class="row">
                        <div class="col-md-4 pe-3 pb-3 pe-lg-5 pb-lg-5">
                            <img class="img-fluid my-3 img-shadow" src="img/porch3.jpg" alt="Oak Porch">
                        </div>
        
                        <div class="col-md-8 my-3 pe-lg-5">
                            <p class="fs-4">All of our oak framed porches are made from solid oak. The oak framed porch sections are planed all round and lightly sanded for a smooth finish and are held together using traditional mortice and tennon jointing. </p>
        
                            <p class="fs-4">Our oak porches slot together perfectly and are then secured by knocking in a number of the kiln dried oak pegs, which will tighten the oak frame up even more over time. Our porches are 100% tailored to the client's requirements and conditions.</p>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-sm-2 g-3">
                <div class="col">
                    <a href="#" class="card shadow-sm">
                        <div class="card-img-cover">
                            <img src="img/p1.jpg" width="100%">
                        </div>
                        <div class="card-body bg-primary">
                            <p class="card-text">PORCHES</p>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="card shadow-sm">
                        <div class="card-img-cover">
                            <img src="img/p2.jpg" width="100%">
                        </div>
                        <div class="card-body bg-primary">
                            <p class="card-text">GAZEBOS</p>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="card shadow-sm">
                        <div class="card-img-cover">
                            <img src="img/p3.jpg" width="100%">
                        </div>
                        <div class="card-body bg-primary">
                            <p class="card-text">PERGOLAS</p>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="card shadow-sm">
                        <div class="card-img-cover">
                            <img src="img/p4.jpg" width="100%">
                        </div>
                        <div class="card-body bg-primary">
                            <p class="card-text">TRUSSES</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </section>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>