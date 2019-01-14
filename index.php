<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <title>Gabora</title>
</head>

<body>
  <div class="logo-row">
    <div class="container">
      <div class="row">
        <div class="col-4"><img src="images/gaboralogo.png" alt="gabora"></div>
        <div class="col-8">
          <div class="row">
            <div class="col-6">
              <p>Baldinės medinės kojelės ir skardos gaminiai</p>
            </div>
            <div class="col-3">
              <p>Pagalba:<i style="color:red">+370 555 555</i></p>
            </div>
            <div class="col-3"><a href="#"><i class="fal fa-shopping-basket">Krepšelis</i></a></div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">Pradžia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="galerija.php">Produktai <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="skaiciuokle.html">Skaiciuokle <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="apiemus.html">Apie mus <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="kontaktai.html">Kontaktai <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>
  <div id="mainPageCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#mainPageCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mainPageCarousel" data-slide-to="1"></li>
      <li data-target="#mainPageCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-75" src="images/karusele1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-75" src="images/karusele2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-75" src="images/karusele3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#mainPageCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mainPageCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div>
    <div class="products" id="product">
      <div class="container">
        <div class="row">
          <div id="pirmakat" class="col-6">
            <a href="#">
              <h4>Baldinės kojelės</h4>
              <a class="btn btn-primary" href="#" role="button">Placiau</a>
            </a>

          </div>
          <div id="antrakat" class="col-6">
            <a href="#">

              <h4>Skardos gaminiai</h4>
              <a class="btn btn-primary" href="#" role="button">Placiau</a>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="background-color:gray">
    <h6>Visos teises saugomos</h6>


  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>