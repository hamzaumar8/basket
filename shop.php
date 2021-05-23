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

          <!--Start Box-->
          <div class="box">
            <h1>Shop</h1>

            <p>It is a long established fact that the reader will be distracted by the readable content of the page when loking at its layout. The point of using Lorem Ipsum is the it has a more-or-less normal distribution of letters, as opposed using</p>
            
          </div>
          <!--End Box-->

          <!--Start Row-->
      <div class="row">

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->

        <!--Start Cols-->
        <div class="col-6 col-sm-4 col-md-4 center-responsive mb-4">

          <!--Start Card-->
          <div class="card product">
            <a href="details.php">
              <img src="admin_area/product_images/product-one.jpg" class="card-img-top">
            </a>

            <div class="card-body">
              <h3 class="card-title"><a href="details.php"> Market Basket </a></h3>
              <p class="price text-center">$50</p>
              <div class="buttons text-center">
                <a href="details.php" class="btn btn-success btn-sm btn-block"><i class="fa fa-shopping-cart"></i>Add to Cart</a>

              </div>
              
            </div>
            
          </div>
          <!--End Card-->
          
        </div>
        <!--End Cols-->
        
      </div>
      <!--End Row-->

      <!--Start Pagination-->
      <ul class="pagination justify-content-center">

        <li class="page-item">
          <a href="#" class="page-link">Previous</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">1</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">2</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">3</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">4</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">5</a>
        </li>

        <li class="page-item">
          <a href="#" class="page-link">Next</a>
        </li>

      </ul>
      <!--End Pagination-->
          
        </div>
        <!--End col-md-9-->

      </div>
      <!--End Row-->

      </div>
      <!--End Container-->
    </div>
    <!--End Content-->


    

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


  </body>

</html>

<?php
echo "<hr/>";
?>