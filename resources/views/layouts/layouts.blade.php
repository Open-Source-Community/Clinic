
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Home | Clinic Application</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles/style.css" rel="stylesheet">
  </head>

  <body>
<!--start navbar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <a class="navbar-brand" href="">Clinic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Booking </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
      </div>
    </nav>
<!--end navbar-->

<!--start body-->
<body>
    @yield('body')
</body>
<!-- end body -->

<!-- start footer -->
<div class="footer">
        <div class="container">
        
            <div class="row">
             
                <div class="col-lg-4 col-md-4">
                <h1>AKMHD</h1>
                <p>Since 2016</p>
                <p><em>'Delivering apps for low cost and maximum fun.'</em></p>
                </div>
                
                <div class="col-lg-4 col-md-4">
                <h1>GET IN TOUCH</h1>
                <p><i class="fa fa-phone"></i> 011111 222 333</p>
                <p><i class="fa fa-envelope-o"></i> <a href="mailto:info@appname.com">info@appname.com</a></p>    
                </div>
                
                <div class="col-lg-4 col-md-4">
                <h1>ABOUT US</h1>
                <p>Delivering high quality apps for low cost and maximum fun.</p>    
                <p>Company name @ 2016</p>
                
                </div>

            </div>
            
        </div>
    </div>
<!-- end footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
