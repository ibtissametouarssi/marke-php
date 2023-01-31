<!DOCTYPE html>
<html>
<head>
    <title>TP.Facture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/JavaScript1.js"></script>
    <link href="css/StyleSheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function () {
            afficherProduits();
        });
    </script>
</head>
<body>
   <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-light  py-3 fixed-top" >
        <div class="container-fluid ">
          <img src="ll-removebg-preview.png" alt="" id="img"/>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shope</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="register.php">inscrire</a>
              </li>

              <li class="nav-item">
                <a href="carte.php"><i class="fas fa-shopping-bag" ></i></a>
                <a href="login.php"><i class="fas fa-user" ></i></a>
              </li>

            </ul>
          </div>
        </div>
    </nav>

<br><br><br><br><br>

    <input id="Button1" type="button" value="button" onclick="printDiv('dvFACTURE')"/>
    <div class="container bg-white shadow">
        <div class="row -">
            <div class="col-sm-8">
                <table class="table table-sm table-borderless" style="background-color:whitesmoke">
                    <tr>
                        <td>
                            <input class="form-control" id="txtSearch" type="text" />
                        </td>
                        <td style="text-align:left">
                            <input id="btnSearch" class="btn btn-primary" type="button" value="Rechercher" autocomplete="off" onclick="afficherProduits()" />
                            <input id="btnPrintProduit" class="btn btn-success" type="button" value="Imprimer" onclick="printDiv('dvPRODUIT')" />
                        </td> 
                    </tr> 
                </table>
                <div id="dvPRODUIT"></div>
            </div>
            <div class="col-sm-4" id="dvFACTURE">
                <table class="table table-bordered" id="tbFACTURE">
                    <thead>
                        <tr>
                            <th>PRODUIT</th>
                            <th>PRIX</th>
                            <th>Qté</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='2'>TOTAL</td>
                            <td id="qTOTAL"></td>
                            <td id="tTOTAL"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    

     <!--map-->
     <div class="map mt-5 ">
          <iframe  style="width: 100%;height: 250px;border: none;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6149.493934126575!2d-106.08781649372074!3d39.58785274481231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2z2YPZiNmE2YjYsdin2K_ZiNiMINin2YTZiNmE2KfZitin2Kog2KfZhNmF2KrYrdiv2Kk!5e0!3m2!1sar!2sma!4v1645378026759!5m2!1sar!2sma"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted ">
  <div class=" bg-dark text-white ">

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom ">
      <div class="me-5 d-none d-lg-block">
      <span>Rejoignez-nous sur les réseaux sociaux :</span>
    </div>
      <div>
      <a href="" class="me-4 text-reset"><i class="fab fa-facebook-f bg-warning text-dark"></i></a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter bg-warning text-dark"></i></a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google bg-warning text-dark"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram bg-warning text-dark"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin bg-warning text-dark"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-dark">
            <i class="fas fa-gem me-3 "></i>MARKET
          </h6>
          <p>
          Nous fournissons les meilleurs produits aux prix les plus abordables
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-dark">
            Produits
          </h6>
          <p>
            <a href="#!" class="text-reset">Fruit</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Machines</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Montres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nourriture</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-dark">
          LIENS UTILES
          </h6>
          <p>
            <a href="#!" class="text-reset">Market</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Parametre</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Aide</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-dark">Contact</h6>
          <p><i class="fas fa-home me-3 bg-warning text-dark"></i> Maroc, Tanger 10012, mm</p>
          <p>
            <i class="fas fa-envelope me-3 bg-warning text-dark"></i>
            ibtissamt345@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 bg-warning text-dark"></i> + 212 6 55 34 67 88</p>
          <p><i class="fas fa-print me-3 bg-warning text-dark"></i> + 212 6 55 34 67 88</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>

  </div>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 mb-2 bg-dark text-white" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">MARKET.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>