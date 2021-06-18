<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
          .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      section {
        padding-top: 5rem;
        padding-bottom: 5rem;
      }

      .lnr {
        display: inline-block;
        fill: currentColor;
        width: 1em;
        height: 1em;
        vertical-align: -0.05em;
        stroke-width: 1;
      }

      .services-icon {
        margin-bottom: 20px;
        font-size: 30px;
      }
      bgc2, .vLine, .hLine {
          background-color: #0F52BA;
      }

      .quote-icon {
        font-size: 40px;
        margin-bottom: 20px;
      }
      .services-icon {
          font-size: 60px;
          margin-left: 2rem;
      }
    </style>
    <title>PT Teknindo Geosistem Unggul</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">PT Teknindo Geosistem Unggul</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        @if (Route::has('login'))  
            @auth
            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                @else
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                @endauth
        @endif
        </li>
        <li class="nav-item">
        @if (Route::has('login'))  
            @auth
            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                @else
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
                @endif
            @endauth
        @endif
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://www.geosistem.co.id/images/PRODUCT/DINDING/Inclinometer_Kalibaru_Port%2C_Jakarta%2C_2018.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Geotechnical Instrument</h2>
          <p class="lead">Geotechnical intrument are necessary deemed to control any manageable </p>
          <p class="lead">problems within the process of reclamation and soil improvement.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://www.geosistem.co.id/images/Settlement-Plate-Bontang-PKT,-East-Kalimantan,-2016.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Settlement Plate</h2>
          <p class="lead">Settlement Plate Bontang PKT Settlement Plate Bontang PKT, East Kalimantan, 2016</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://www.geosistem.co.id/images/PROJECT/PVD/PELABUHAN-BELAWAN-MEDAN,-SUMATERA-UTARA-PHASE-1,-2019.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Prefabricated Vertical Drain</h2>
          <p class="lead">One of the most popular methods of ground improvement is the use of</p>
          <p class="lead" style="color">prefabricated vertical drain (PVD) in combination with surchange.</p>
       </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
  </body>

<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

</html>