<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
  h2 {
    background-color: rgba(0, 0, 0, 0.7);
    border: 4px solid #000000;
  }
</style>

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
  <script src="js/hitungcowdisc.js"></script>
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


  <section class="page-section">
    <div class="container-fluid">
      <div class="product-item">
        <div class="form-group">
          <center>
            <h2 class="section-heading mb-4">
              <font color='darkorange' size='10'>PREMIUM CATTLE COW</font>
            </h2>
          </center>
          <table class="table table-responsive-ml table-striped table-light">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Stock/Unit</th>
                <th scope="col">Livestock Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">CTLCow-001</th>
                <td>8 Unit</td>
                <td>Limousin</td>
                <td>Rp160.000.000/Unit</td>
                <td> <input class="form-control" type="text" name="qtyc1" id="qtyc1" value="0" onkeyup="hitung2()"> </td>
              </tr>
              <tr>
                <th scope="row">CTLCow-002</th>
                <td>12 Unit</td>
                <td>Brahman</td>
                <td>Rp57.000.000/Unit</td>
                <td> <input class="form-control" type="text" name="qtyc2" id="qtyc2" value="0" onkeyup="hitung2()"> </td>
              </tr>
              <tr>
                <th scope="row">CTLCow-003</th>
                <td>13 Unit</td>
                <td>Angus</td>
                <td>Rp78.000.000/Unit</td>
                <td> <input class="form-control" type="text" name="qtyc3" id="qtyc3" value="0" onkeyup="hitung2()"> </td>
              </tr>
              <tr>
                <th scope="row">CTLCow-004</th>
                <td>16 Unit</td>
                <td>Brangus</td>
                <td>Rp89.000.000/Unit</td>
                <td> <input class="form-control" type="text" name="qtyc4" id="qtyc4" value="0" onkeyup="hitung2()"> </td>
              </tr>
              <tr>
                <th scope="row">CTLCow-005</th>
                <td>18 Unit</td>
                <td>Ongole</td>
                <td>Rp32.000.000/Unit</td>
                <td> <input class="form-control" type="text" name="qtyc5" id="qtyc5" value="0" onkeyup="hitung2()"> </td>
              </tr>
              <tr>
                <td colspan="4"><center>Total Normal</center></td>
                <td> <input class="form-control" type="text" name="totaltemp" id="totaltemp" onkeyup="hitung2()" disabled> </td>
              </tr>
              <tr>
                <td colspan="4"><center>Total DIscount</center></td>
                <td> <input class="form-control" type="text" name="totaltempc" id="totaltempc" onkeyup="hitung2()" disabled> </td>
              </tr>
            </tbody>
          </table>
          <center>
          <table class="table table-responsive-ml table-striped table-dark">
          <tr>
            <td><center><button type="button" class="btn btn-light btn-block" name="button1" onclick="window.print();return false;">ORDER</button></center></td>
          </tr>
        </table>
        </center>
        </section>
        </div>
      </div>
    </div>
</body>

<footer class="footer text-faded text-center py-5">
  <div class="container">
    <p class="m-0 small">Copyright &copy; 4646 Martabak Brothers</p>
  </div>
</footer>

</html>
