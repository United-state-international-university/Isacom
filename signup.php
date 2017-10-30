<!doctype html>
<html lang="en">
  <head>
    <title>Isacomgroup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- my CSS -->
<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <!--  navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="isacom logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Real estate</a>
              <a class="dropdown-item" href="#">Furnitures</a>
            <a class="dropdown-item" href="#"> construction materials</a>
          </div>
        </li><li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Service
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">IT support</a>
              <a class="dropdown-item" href="#">Plumber</a>
              <a class="dropdown-item" href="#">Electrician</a>
              <a class="dropdown-item" href="#">Architecture</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Fundi</a>
            </div>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Photos and videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="signin.php">Sign in</a>
              <a class="dropdown-item" href="signup.php">Sign up</a>

          </div>
    </ul>
    <form class="form-inline my-2 my-lg-0 pull-right">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
  </div>
</nav>
<!-- body -->
<body>

    <br><br>
    <div class="container">
      <div class="text-center">
      SIGN UP
       </div>
    </div><br><br>

	<div class="container">


    		<form action="sigin.php" method='post' class="form">
    		  <div class="row form-group">
    		    <div class="col-md-3 "> FULL NAME </div>

    		    <div class="col-md-3 ">
        			<input class="form-control" placeholder="First Name" type="text" name="uname">
        		 </div>
        	   <div class="col-md-3 ">
               <input class="form-control" placeholder="Last Name" type="text" name="uname">
              </div>
    		  </div><br>
          <!--email-->

          <div class="row form-group">
            <div class="col-md-3 "> EMAIL </div>

            <div class="col-md-6 ">
              <input class="form-control" placeholder="example@EMAIL.com" type="email" name="uname">
             </div>

          </div><br>
    		  		<br>

              <!--Phone number-->
              <div class="row form-group">
                <div class="col-md-3 "> Phone  </div>

                <div class="col-md-6 ">
                  <input class="form-control" placeholder="Phone" type="tel" name="uname">
                 </div>

              </div><br>
                  <br>
                <div class="row form-group">
                  <div class="col-md-3">Address</div>
                  <div class="col-md-6">
                    <input class="form-control" placeholder="Address" type="text">
                  </div>
                </div><br><br>

                <div class="row form-group">
                  <div class="col-md-3"></div>
                  <div class="col-md-3">
                    <input class="form-control" placeholder="City" type="text">
                  </div>
                  <div class="col-md-3">
                    <select class="selectpicker" name="cat"  id="sel1">
                    <option value="">--Country--</option>
                    <option value="laptops">Nigeria</option>
                    <option value="phones">Kenya</option>
                    <option value="id">Uganda</option>
                    <option value="id">Tanzania</option>
                    <option value="id">DRC</option>
                </select>
                  </div>
                </div><br><br>
                <br>
              <div class="row form-group">
                <div class="col-md-3">Password</div>
                <div class="col-md-6">
                  <input class="form-control" placeholder="password" type="password">
                </div>
              </div><br><br>





    		  <div class="row ">
    		    <div class="col-md-5 "></div>
    		    <div class="col-md-3">
        			<input class="btn btn-default btn-block btn-primary pull-right" type="submit" name="submit" value="submit">

         		 </div>
         		 <div class="col-md-4 "></div>
    		  </div>

    		</form>


   </div>
<!-- end body -->
<!--Footer-->
<footer class="page-footer #424242 grey darken-3">
    <!--Footer Links-->
    <div class="container">
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Company name</h6>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Products</h6>
                <p><a href="#!">Real Estate</a></p>
                <p><a href="#!">Furnitures</a></p>
                <p><a href="#!">Construction</a></p>
            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Useful links</h6>
                <p><a href="#!">Your Account</a></p>
                <p><a href="#!">Become an Affiliate</a></p>
                <p><a href="#!">Shipping Rates</a></p>
                <p><a href="#!">Help</a></p>
            </div>
            <!--/.Third column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Contact</h6>
                <p><i class="fa fa-home mr-3"></i> Uganda</p>
                <p><i class="fa fa-envelope mr-3"></i> Isacomgroup@example.com</p>
                <p><i class="fa fa-phone mr-3"></i> +2340800-00-00</p>
                <p><i class="fa fa-print mr-3"></i> +2540-000-00-00</p>
            </div>
            <!--/.Fourth column-->

        </div>
        <!-- Footer links -->

        <hr>

        <div class="row py-3 d-flex align-items-center">

            <!--Grid column-->
            <div class="col-md-8 col-lg-9">

                <!--Copyright-->
                <p class="text-center text-md-left grey-text">© 2017 Copyright: <a href="https://www.Boa.com"><strong> Isacomgroup.com</strong></a></p>
                <!--/.Copyright-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-lg-3 ml-lg-0">

                <!--Social buttons-->
                <div class="social-section text-center text-md-left">

                        <a class="btn-floating btn-sm rgba-white-slight mr-xl-4" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="btn-floating btn-sm rgba-white-slight mr-xl-4" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="btn-floating btn-sm rgba-white-slight mr-xl-4" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="btn-floating btn-sm rgba-white-slight mr-xl-4" href="#"><i class="fa fa-linkedin"></i></a>

                </div>
                <!--/.Social buttons-->

            </div>
            <!--Grid column-->

        </div>

    </div>

</footer>
<!--/.Footer-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
