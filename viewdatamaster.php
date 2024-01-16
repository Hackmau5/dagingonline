<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>4646 FARM</title>

  <!-- Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles  -->
  <link href="css/business-casual.min.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/hitung.js"></script>
  <script type="text/javascript">
    function delivery() {
      document.getElementById("tBox").value = localStorage.getItem("message");
    };
  </script>
</head>

<body>
  <header class="container-fluid">
  <h1 class="site-heading text-center text-white">
    <span class="site-heading-lower">4646 COW FARM</span>
    <span class="site-heading-upper text-primary mb-3">Chill it's 4646</span>
  </h1>
  </header>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 sticky-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">4646 COW FARM</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="news.php">News</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="announcement.php">Announcement</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="viewdatamaster.php">Shopping</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <section class="page-section clearfix" style="background-color: rgba(0,0,0,0.5);"><br></br>
    <div class="container px-0">
      <div class="intro">
          <figure class="figure" style="border: 7px solid darkorange">
              <a href="buybeef.php"><figcaption class="figure-caption text-center"><p style="font-size:30px; color:darkorange; background-color: rgb(0,0,0);">Meat From the Premium Cattle</p></figcaption><img class="rounded float-left" src="img/daging.jpg" width="550px" height="350px"></a>
          </figure>
          <figure class="figure" style="border: 7px solid darkorange">
              <a href="buycow.php"><figcaption class="figure-caption text-center"><p style="font-size:30px; color:darkorange; background-color: rgb(0,0,0);">The Premium Cattle Cow</p></figcaption><img class="rounded float-right" src="img/cattle1.jpg" width="550px" height="350px"></a>
          </figure>
            <a href="buycow.php"></a>
      </div>
    </div><br></br>
  </section>

<footer class="footer text-faded text-center py-5">
  <div class="container">
    <p class="m-0 small">Copyright &copy; 4646 Martabak Brothers</p>
  </div>
</footer>

</html>
