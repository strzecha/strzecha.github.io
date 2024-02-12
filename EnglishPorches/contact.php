
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Porches |  Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/custom-primary.css">
</head>
  <body class="bg-secondary">
    <?php 
      include 'header.php';
      show_header("contact");
    ?>
    
    <section class="contact">
        <div class="container">
            
            <div class="row">
                <div class="col-12 text-body bg-white mt-3 p-3">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <p><i class="icon-phone"></i>Phone number: 123 456 789</p>
                            <p>Call us between 8am and 5pm</p>
                        </div>
                        <div class="col-sm-6 text-center">
                            <p><i class="icon-mail-alt"></i>E-mail: something@example.com</p>
                            <p>Ask us everything you want</p>
                        </div>
                    </div>

                    <p class="text-center">Do you have any questions? Send them to us!</p>

                    <form action="send_message.php" method="post" id="contactForm">
						<div class="row">
							<div class="col-sm-6 mt-3">
								<input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
							</div>
							<div class="col-sm-6 mt-3">
								<input class="form-control" name="email" id="email" type="email" placeholder="Enter your email" required>
							</div>
							<div class="col-12 mt-3">
								<textarea class="form-control" name="message" id="message" cols="30" rows="9" placeholder="Enter your message" required></textarea>
							</div>
						</div>
                        <?php
                            if(isset($_SESSION["result"])){
                                if($_SESSION["result"] == "OK"){
                                    echo "<p style='color: green;'>Your message was sent</p>";
                                }
                                elseif($_SESSION["result"] == "MISSING_DATA"){
                                    echo "<p style='color: red;'>You must enter your email and message</p>";
                                }
                                unset($_SESSION["result"]);
                            }
                        ?>
						<div class="form-group mt-3 d-grid col-md-4 offset-md-4">
							<button type="submit" class="btn btn-primary btn-lg">Send</button>
						</div>
						
					</form>
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