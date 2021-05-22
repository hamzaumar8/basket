<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Custom Styles-->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/owl.theme.default.min.css">

    <title>Divine Baskets</title>

  </head>

  <body>

    <!--Start Top Items Navigation-->
    <div id="top">

        <div class="container">

          <div class="row">

            <div class="col-sm-12">

          <a href="index.php">Divine Baskets</a>
          <a href="customer_register.php" style="float: right;">Register</a>
          <a href="checkout.php" class="mr-2" style="float: right;">Login</a>
          <a href="cart.php" class="mr-2" style="float: right;"><i class="fa fa-shopping-cart"></i><span class="badge badge-success badge-pill">4</span></a>

            </div>          
          </div>
        </div>
  </div>


  <!--Start Navigation-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light"> 

      <!--Start Container-->
      <div class="container">

      <!--Navbrand-->
      <a class="navbar-brand" href="index.php">
        <img class="img-fluid" src="images/logo.png">
      </a>

      <!--Start Button for Collapse Navbar-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span> 
      </button>
      <!--End Button for callapse Navbar-->

      <!--Start Links-->
      <div class="collapse navbar-collapse" id="navbarResponsive"> 
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fa fa-home"></i>Home
            </a>
          </li> 

          <li class="nav-item active">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="customer/my_account.php">My Account</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cart.php">Shopping Cart</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>

        </ul>


      </div>      
      <!--End Links-->

      </div>
      <!--End Container-->

    </nav>
    <!--End Navigation-->
    <br/>


    <!--Start Content-->
    <div id="content">
      
      <!--Start Container-->
      <div class="container">

        <!--Start Row-->
        <div class="row">

        <div class="col-md-12">

          <!--Start Breadcrumb-->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">
              Shop
            </li>
            
          </ul>
          <!--End Breadcrumb-->
          
        </div>

        <!--Col-md-3 Starts-->
        <div class="col-md-3 mb-4">

          <?php

          include("includes/sidebar.php");

          ?>
          
        </div>
        <!--Col-md-3 Ends-->

        <!--Start col-md-9-->
        <div class="col-md-9">

          <!--Start Row-->
          <div class="row" id="productMain">

            <!--Start col-sm-6-->
            <div class="col-6">

              <!--Start main Image-->
              <div id="mainImage">
                
                <!--Start Carousel Div-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
        </ol>
        
      <!--Start Carousel Inner-->
      <div class="carousel-inner" role="listbox"> 

        <!-- Start First Slide-->
        <div class="carousel-item active" style="background-image: url('admin_area/product_images/product-one.jpg');"> 
        </div>
        <!--End First Slide-->

        <!-- Start Second Slide-->
        <div class="carousel-item" style="background-image: url('admin_area/product_images/product-two.jpg');"> 
        </div>
        <!--End Second Slide-->

        <!-- Start Third Slide-->
        <div class="carousel-item" style="background-image: url('admin_area/product_images/productthree.jpg');"> 
        </div>
        <!--End Third Slide-->      
      </div>
      <!--End Carousel Inner-->

      <!--Start Previous-->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
        <span class="sr-only">Previous</span>
      </a>
      <!--End Previous-->

      <!--Start Next-->
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"> </span>
        <span class="sr-only">Next</span>
      </a>
      <!--End Next-->
      </div>
      <!--End Carousel Div-->

              </div>
              <!--End Main Image-->
              
            </div>
            <!--End col-6-->

            <div class="col-6">

              <!--Start Box-->
              <div class="box">
                
                <h1 class="text-center">Market Basket</h1>

                <!--Start Form-->
                <form action="details.php" method="POST" class="form inline">

                  <div class="row">

                    <div class="col-5">
                      <label>Product Quantity</label>
                    </div>

                    <div class="col-7">

                      <select class="custom-select" name="product_qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                      
                    </div>
                    
                  </div>

                  <p class="price text-center mt-4">$50</p>

                  <p class="text-center buttons">
                    <button class="btn btn-success btn-sm" type="submit">
                      <i class="fa fa-shopping-cart"></i>Add to Cart                      
                    </button>
                  </p>
                  
                </form>
                <!--End Form-->
              </div>
              <!--End Box-->

              <!--Start Row-->
              <div class="row" id="thumbs">

                <!--Start Small Cols-->
                <div class="col-4 col-md-4">

                  <a href="#" class="thumb">
                    <img src="admin_area/product_images/product-one.jpg" class="img-fluid">
                  </a>
                  
                </div>
                <!--End Small Cols-->

                <!--Start Small Cols-->
                <div class="col-4 col-md-4">

                  <a href="#" class="thumb">
                    <img src="admin_area/product_images/product-two.jpg" class="img-fluid">
                  </a>
                  
                </div>
                <!--End Small Cols-->

                <!--Start Small Cols-->
                <div class="col-4 col-md-4">

                  <a href="#" class="thumb">
                    <img src="admin_area/product_images/productthree.jpg" class="img-fluid">
                  </a>
                  
                </div>
                <!--End Small Cols-->
                
              </div>
              <!--End Row-->

              
            </div>
            
          </div>
          <!--End Row-->

          <!--Start Details Box-->
          <div class="box mt-4" id="details">

            <p>
              <h4>Product Details</h4>

              <p>
                This is a description for the products This is a description for the products This is a description for the products This is a description for the products This is a description for the products This is a description for the products This is a description for the products
              </p>

              <h4>Uses</h4>

              <ul>
                <li>Buying Tomatoes</li>
                <li>Buying Oranges</li>
                <li>Buying Watermelon</li>

              </ul>
            </p>
            
          </div>
          <!--End Details Box-->

          
          
        </div>
        <!--End col-md-9-->

      </div>
      <!--End Row-->

      </div>
      <!--End Container-->
    </div>
    <!--End Content-->



    <!--Start Container-->
    <div class="container mt-5 mb-4">

      <h2 class="mb-4">You may also like these baskets <i class="fa fa-shopping-basket"></i></h2>

      <div class="owl-carousel owl-theme">

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        <div class="item">

          <div class="card">
            <a href="#">
              <img data-src="admin_area/product_images/basket.jpg" class="card-img-top owl-lazy">
            </a>

            <div class="card-body">
              <h5 class="card-title text-center"><a href="details.php">Bread Basket</a></h5>
              <p class="price text-center">$50</p>
              <p class="card-text text-center">
                <a href="#" class="btn btn-success btn-sm"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
              </p>
              
            </div>
            
          </div>
          
        </div>

        
      </div>
      
    </div>
    <!--End Container-->


    

    <!--Include Footer-->
    <?php

    include("includes/footer.php");

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--Owl Carousel Links-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>


    <!--Responsive Owl Carousel Script-->
    <?php
    include("includes/owl_script.php");
    ?>


  </body>

</html>

<?php
echo "<hr/>";
?>