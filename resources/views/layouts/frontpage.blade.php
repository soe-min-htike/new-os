<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css3/bootstrap4.css">
  <link rel="stylesheet" href="css3/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Comet Myanmar</title>
</head>

<body>



  <div class="container-fluid bg-black">
    <nav class="container navbar navbar-expand-lg navbar-dark bg-black">
      <a class="navbar-brand" href="#">Comet Myanmar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
          <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
          </div>
          @endif
        </div>
      </div>
    </nav>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/slide1.jpg" alt="img1">
        <div class="carousel-caption d-none d-md-block">
          <h1>BEST WINTER COLLECTION</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <button class="btn btn-info btn-lg">Shop Now</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>BEST WINTER COLLECTION</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <button class="btn btn-info btn-lg">Shop Now</button>
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



  <div class="container-fluid offer pt-3 pb-3 bg-orange d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 m-right">
          <h4>FREE SHIPPING</h4>
          <p>On all orders over 90$</p>
        </div>

        <div class="col-md-4 m-right">
          <h4>CALL US ANYTIME</h4>
          <p>+91 7396403672</p>
        </div>

        <div class="col-md-4">
          <h4>OUR LOCATION</h4>
          <p>On all orders over 90$</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-light-gray">
    <div class="container pt-3">

      <div class="container">
            <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
              <input class="form-control form-control ml-3 w-75" type="search" placeholder="Search" aria-label="Search"><button
                class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
        
      <div class="row mt-3">
        <h3>POPULAR</h3>
      </div>
      <div class="row">
        <div class="underline"></div>
      </div>
    </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/makeup.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>Makeup</h5></div>
        </div>

        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/lip.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>Lip</h5></div>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/soap.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>Soap</h5></div>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/lip.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>White</h5></div>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/lip.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>White</h5></div>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="#"><img src="img/lip.jpg" alt="Image" class="img-thumbnail"></a>
          <div class="d-flex justify-content-center"><h5>White</h5></div>
        </div>      
        
      </div>
    </div>

    @yield('content')
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
      integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
      crossorigin="anonymous"></script>
</body>

</html>