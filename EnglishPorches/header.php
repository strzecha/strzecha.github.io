<?php

function show_header($show_section){

  $main = "";
  $gallery = "";
  $about = "";
  $contact = "";
  $title = "";

  switch($show_section){
    case "main":
      $main = "active";
      $title = "Main Page";
      break;
    case "gallery":
      $gallery = "active";
      $title = "Gallery";
      break;
    case "about":
      $about = "active";
      $title = "About Us";
      break;
    case "contact":
      $contact = "active";
      $title = "Contact";
      break;

  }

  echo <<<END
        <header>
            <div class="container text-center">
                <div class="row">
                    <a class="d-none d-sm-block col-sm-4 col-lg-3 my-sm-4 my-md-auto" href="index.php">
                        <img src="img/logo.png" class="img-fluid d-block mx-auto">
                    </a>
        
                    <div class="text-center my-5 col-12 col-sm-6 my-sm-3 my-md-auto">
                        <i class="icon-briefcase"></i>Office Hours: 8am - 5pm
                        <br>
                        <i class="icon-phone"></i>Phone number: 123 456 789
                        <br>
                        <i class="icon-mail-alt"></i>E-mail: something@example.com
                    </div>
                    <a class="text-center col-4 col-sm-2 col-lg-3 my-0 d-none d-sm-block" href="#">
                        <i class="icon-facebook-official"></i>
                    </a>
                </div>
            </div>
            
            <nav class="navbar navbar-dark bg-primary navbar-expand-sm ps-3 ps-sm-5">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Navigation switcher">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="mainmenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link $main" href="index.php"> Main </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link $gallery" href="gallery.php"> Gallery </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link $about" href="about.php"> About </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link $contact" href="contact.php"> Contact </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="card bg-dark">
                <img src="img/header.jpg" class="card-img rounded-0" alt="...">
                <div class="card-img-overlay">
                    <h1 class="h1 text-white fw-bold img-middle">$title</h1>
                </div>
            </div>
            
        </header>
  END;
}


?>