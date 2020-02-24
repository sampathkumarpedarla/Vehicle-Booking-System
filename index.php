<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Vehicle booking system</title>

  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <script src="https://kit.fontawesome.com/c25120f8b2.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

  <section class="coloured-section"id="title" style="background-color:#3c4245">
    <div class="container-fluid">



      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Abc cars</a>
        <input type="submit" class="navbar-toggler" href="registration.php" value="register">
        <button class="navbar-toggler" href="registration.php" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">About us</a>

            </li>
          </ul>
        </div>
      </nav>



      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Ride  Vehicle nearby.</h1>
          <a class="btn btn-outline-light btn-lg download-button" href="registration.php"><i class="fas fa-pen-alt"></i> Register Now</a>
        </div>



        <div class="col-lg-6">
          <img class="title-image" src="images/comp_11_small.gif" alt="LOGO">
        </div>

      </div>

    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features" style="background-color:#eafbea">

    <div class="row">
      <div class="feature-box col-lg-4">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>User Friendly.</h3>
        <p>User can easily use our website.</p>
      </div>

      <div class="feature-box col-lg-4">
        <i class="icon fas fa-check-circlec fa-4x"></i>
        <h3>Elite Cars Available</h3>
        <p>We have all types Vehicle Available at working hours.</p>
      </div>

      <div class="feature-box col-lg-4">
        <i class="icon fas fa-check-circle fa-4x"></i>
        <h3>Guaranteed to work.</h3>
        <p>Find the of your Ride is not Good your money back.</p>
      </div>
    </div>
  </section>


  <!-- Testimonials -->

  <section class="coloured-section"id="testimonials" style="background-color:#003f5c">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <h2 class="testimonial-text">My ride used to be so lonely, but with abc cars help, I've found the Life of Riding Vehicles .</h2>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Beverly, Illinois</em>
        </div>
        <div class="carousel-item ">
          <h2>With every safety feature we add and every standard in our Community Guidelines we uphold, we’re committed to protecting you on the road ahead. </h2>
          <img class="testimonial-image" src="images/phone.jpg" alt="t&c">
          <em>Pebbles, New York</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>




  </section>



  <!-- About us -->

  <section class="coloured-section"id="cta" style="background-color:#472b62">

    <h3 class="cta-heading">Find the True and safe Ride of Your Life Today.</h3>
    <a class="download-button btn btn-lg btn-light" href="registration.php"><i class="fas fa-pen-alt"></i> Register Now</a>
    

  </section>

  <!-- Footer -->

  <footer class="white-section" id="footer" style="background-color:#f8f8f8">
    <a class="btn "style = "background-color: #293462" href="https://www.facebook.com/"><i class="social-icon fab fa-facebook-f"></i></a>

    <a href="https://twitter.com/" class="btn " style = "background-color: #5eb7b7"><i class="social-icon fab fa-twitter"></i></a>

    <a href="https://www.instagram.com/" class="btn " style = "background-color: #ff4893"><i class="social-icon fab fa-instagram"></i></a>

    <a class="btn " style = "background-color: #c93838" href="https://accounts.google.com/Login/signinchooser?hl=en&flowName=GlifWebSignIn&flowEntry=ServiceLogin
"><i class="social-icon fas fa-envelope"></i></a>

    <p>© Copyrights Team vit-ap students</p>

  </footer>


</body>


</html>
