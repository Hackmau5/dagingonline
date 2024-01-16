<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style>
    h2 {
      background-color: rgba(0, 0, 0, 0.7);
      border: 4px solid #000000;
    }
  </style>
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
  <script src="js/hitungbeefdisc.js"></script>
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
        <center>
          <h2 class="section-heading mb-4">
            <font color='darkorange' size='10'>PREMIUM BEEF</font>
          </h2>
        </center>
        <table class="table table-responsive-ml table-striped table-light">
          <thead>
            <tr>
              <th scope="col">Code</th>
              <th scope="col">Stock/Unit</th>
              <th scope="col">Class</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">PRMeat-001</th>
              <td>72Kg</td>
              <td>Class I</td>
              <td>Kobe Meat</td>
              <td>Rp 1.860.000/kg</td>
              <td> <input class="form-control" type="text" name="qty1" id="qty1" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-002</th>
              <td>57Kg</td>
              <td>Class I</td>
              <td>Wagyu Meat</td>
              <td>Rp 3.320.000/kg</td>
              <td> <input class="form-control" type="text" name="qty2" id="qty2" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-003</th>
              <td>90Kg</td>
              <td>Class I</td>
              <td>Tenderloin Meat</td>
              <td>Rp 1.350.000/kg</td>
              <td> <input class="form-control" type="text" name="qty3" id="qty3" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-004</th>
              <td>200Kg</td>
              <td>Class II</td>
              <td>Bone-in Ribeye Meat</td>
              <td>Rp 235.000/kg</td>
              <td> <input class="form-control" type="text" name="qty4" id="qty4" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-005</th>
              <td>128Kg</td>
              <td>Class II</td>
              <td>Porterhouse Meat</td>
              <td>Rp 220.000/kg</td>
              <td> <input class="form-control" type="text" name="qty5" id="qty5" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-006</th>
              <td>184Kg</td>
              <td>Class II</td>
              <td>Silverside Meat</td>
              <td>Rp 70.000/kg</td>
              <td> <input class="form-control" type="text" name="qty6" id="qty6" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-007</th>
              <td>102Kg</td>
              <td>Class III</td>
              <td>Mignon Meat</td>
              <td>Rp 540.000/kg</td>
              <td> <input class="form-control" type="text" name="qty7" id="qty7" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-008</th>
              <td>192Kg</td>
              <td>Class III</td>
              <td>Brahman Meat</td>
              <td>Rp 140.000/kg</td>
              <td> <input class="form-control" type="text" name="qty8" id="qty8" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-009</th>
              <td>178Kg</td>
              <td>Class III</td>
              <td>Beefalo Meat</td>
              <td>Rp 122.857/kg</td>
              <td> <input class="form-control" type="text" name="qty9" id="qty9" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <th scope="row">PRMeat-010</th>
              <td>167Kg</td>
              <td>Class III</td>
              <td>Limousin Meat</td>
              <td>Rp 99.000/kg</td>
              <td> <input class="form-control" type="text" name="qty10" id="qty10" value="0" onkeyup="hitung()"> </td>
            </tr>
            <tr>
              <td colspan="5">
                <center>Total Normal</center>
              </td>
              <td> <input class="form-control" type="text" name="totaltemp" id="totaltemp" onkeyup="hitung()" disabled> </td>
            </tr>
            <tr>
              <td colspan="5">
                <center>Total Discunt</center>
              </td>
              <td> <input class="form-control" type="text" name="totaldisc" id="totaldisc" onkeyup="hitung()" disabled> </td>
            </tr>
          </tbody>
        </table>
        <center>
          <table class="table table-responsive-ml table-striped table-dark">
            <tr>
              <td>
                <center><button type="button" class="btn btn-light btn-block" name="button1" onclick="window.print();return false;">ORDER</button></center>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
  </section>
</body>

</html>
