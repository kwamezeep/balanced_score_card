<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <title>Carousel Template for Bootstrap</title>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Custom styles for this template -->
    <link href="http://v4-alpha.getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">
  </head>
  <body style="padding-bottom:0px;font-family:'Poppins', sans-serif;">

    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top ">
      <a class="navbar-brand" href="#">Balanced Score Card</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Finance</a>
              <a class="dropdown-item" href="#">Sales</a>
              <a class="dropdown-item" href="#">Audit</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="logout.php">
          <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
          <input type="submit" class="btn btn-danger my-2 my-sm-0" value="Logout">
        </form>
      </div>
    </nav>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel " data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="img/bsc_bg.jpg" alt="First slide" style="height:auto;">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Welcome to BSC</h1>
              <p>Balanced Score Card (BSC) is where we earn our respect in our organization. Here we evaluate what we have accomplished in the past month </p>
              <p><button class="btn btn-lg btn-primary" type="button" id="button" href="#start" role="button">Start Here</button></p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container" id="start">

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(255, 93, 48,.2) ">
              <h4 class="card-title">Audit</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(52, 48, 255,.2)">
              <h4 class="card-title">Finance</h4>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(48, 255, 79,.2)">
              <h4 class="card-title">Accountant</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(48, 216, 255,.2) ">
              <h4 class="card-title">Treasury</h4>
            </div>

          </div>
        </div>

      </div>
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(48, 147, 255,.2)">
              <h4 class="card-title">Manager Customer Standards</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(255, 48, 48,.2)">
              <h4 class="card-title">Regulatory Compliance Manager</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60"  style="height:100%;">
            <div class="card-body d-flex" style="background-color:rgb(255, 243, 48,.2 );">
              <h4 class="card-title">Head MFS Technology</h4>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60"  style="height:100%;">
            <div class="card-body" style="background-color:rgb(48, 255, 164,.2 )">
              <h4 class="card-title"><span class="align-basline;">Human Resource</span></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(168, 48, 255,.2 )">
              <h4 class="card-title">Sales</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <a href="create_rec_recon_off_0119.php">
            <div class="card h-60">
              <div class="card-body" style="background-color:rgb(255, 134, 48,.2 )">
                <h4 class="card-title">Reconcilation</h4>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(146, 82, 74,.2 )">
              <h4 class="card-title">Other</h4>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-60">
            <div class="card-body" style="background-color:rgb(142, 146, 74,.2 )">
              <h4 class="card-title">Others</h4>
            </div>

          </div>
        </div>

      </div>
      <!-- /.row -->

    </div><!-- /.container -->

    <footer class="py-3 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <p class="m-0 text-center text-white">All rights reserved. Copyright &copy; <span style="color:#da3832">Zee</span><span style="color:#b1cd53">Pay</span> 2019</p>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/jquery.min.js"></script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    $("button").click(function() {
    $('html,body').animate({
        scrollTop: $("#start").offset().top},
        'slow');
      });
    </script>
    <svg xmlns="http://www.w3.org/2000/svg"
      width="500"
      height="500"
      viewBox="0 0 500 500"
      preserveAspectRatio="none"
      style="
        display: none;
        visibility: hidden;
        position: absolute;
        top: -100%;
        left: -100%;
      "
    >
      <defs>
        <style type="text/css"></style>
      </defs>
      <text
        x="0"
        y="25"
        style="
          font-weight:bold;
          font-size:25pt;
          font-family:Arial, Helvetica, Open Sans, sans-serif
        "
      >
        500x500
      </text>
    </svg>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
