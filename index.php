<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
         crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="style.css">
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

      <!-- home -->
<section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshope offers the best products for the most affordable prices</p>
            <button class="btn btn-dark">Shop Now</button>
        </div>
      </section>

      <section id="brand" class="container">
        <div class="row">
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12 " src="parada.png" alt=""/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="dior.png" alt=""/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="balenciaga.png" alt=""/>
            <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="lancone.png" alt=""/>
        </div>
    </section>

      <!-- new -->
    <section id="new" >
        <div class="row cls">
            <div class="one col-lg-3 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="jakcet.jfif" alt=""/>
                <div class="details">
                    <h2>Extreamely Awsome Shoses</h2>
                    <button class="text-uppercase btn btn-dark">Shop Now</button>
                </div>
            </div>
            
            <div class="one col-lg-3 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="jakcet.jfif" alt=""/>
                <div class="details">
                    <h2>Awsome Jacket</h2>
                    <button class="text-uppercase btn btn-dark">Shop Now</button>
                </div>
            </div>

            <div class="one col-lg-3 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="watches.jfif" alt=""/>
                <div class="details">
                    <h2>50% OFF Watches</h2>
                    <button class="text-uppercase btn btn-dark">Shop Now</button>
                </div>
            </div>

            <div class="one col-lg-3 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="watches.jfif" alt=""/>
                <div class="details">
                    <h2>Awsome Coats</h2>
                    <button class="text-uppercase btn btn-dark">Shop Now</button>
                </div>
            </div>
        </div>
    </section>

      <!-- featured -->
        <section id="featured" class="my-5 pd-5">
            <div class="container text-center mt-5 py-5">
                <h3>Les Fruits</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('get_featured_products.php'); ?>

            <?php while ($row = $featured_products->fetch_assoc()) { ?>
                
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3 imgs" src="<?php echo $row['product_image']; ?>" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?> </h5>
                    <h4 class="p-price">DH<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn btn btn-dark">Buy Now</button></a>
                </div>
            <?php } ?>
            </div>
</section>

<section id="featured" class="my-5 pd-5">
            <div class="container text-center mt-5 py-5">
                <h3>Nourriture</h3>
                <hr class="mx-auto">
           
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('get1.php'); ?>

            <?php while ($row = $featured_pro->fetch_assoc()) { ?>
                
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3 imgs" src="<?php echo $row['product_image']; ?>" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?> </h5>
                    <h4 class="p-price">DH<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn btn btn-dark">Buy Now</button></a>
                </div>
            <?php } ?>
            </div>
</section>
    

    <!--banner-->
    <section id="banner" class="my-5 py-5 banner">
        <div class="container">
            <h4>MID SEASON S SALE</h4>
            <h1>Collection de Machines et Mode<br> UP to 30% 0FF</h1>
            <button class="text-uppercase btn btn-dark"> Shop Now</button>
        </div>
    </section>

    <section id="featured" class="my-5 pd-5">
            <div class="container text-center mt-5 py-5">
                <h3>Les Machines</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('get2.php'); ?>

            <?php while ($row = $featured_pro->fetch_assoc()) { ?>
                
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3 imgs" src="<?php echo $row['product_image']; ?>" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?> </h5>
                    <h4 class="p-price">DH<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn btn btn-dark">Buy Now</button></a>
                </div>
            <?php } ?>
            </div>
</section>

<section id="featured" class="my-5 pd-5">
            <div class="container text-center mt-5 py-5">
                <h3>Mode</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">

            <?php include('get3.php'); ?>

            <?php while ($row = $featured_pro->fetch_assoc()) { ?>
                
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img class="img-fluid mb-3 imgs" src="<?php echo $row['product_image']; ?>" />
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $row['product_name']; ?> </h5>
                    <h4 class="p-price">DH<?php echo $row['product_price']; ?></h4>
                    <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>"><button class="buy-btn btn btn-dark">Buy Now</button></a>
                </div>
            <?php } ?>
            </div>

        </section>
        
        <section>
        <div class="container text-center mt-5 py-5">
                <h3>Les Marques</h3>
                <hr class="mx-auto">
              
            </div>

            <div class="row ">
                <div class="col">
                    <img src="marque1.png" alt="" class="bbb">
                </div>
                <div class="col">
                    <img src="marque2.jfif" alt="" class="bbb">
                </div>
            </div>
        </section>


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
