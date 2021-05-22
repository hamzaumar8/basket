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

          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="customer/my_account.php">My Account</a>
          </li>

          <li class="nav-item active">
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
              Cart
            </li>
            
          </ul>
          <!--End Breadcrumb-->
          
        </div>
        <!--End col-md-12-->


        <!--Start col-md-9-->
        <div class="col-md-9" id="cart">

          <!--Start Box-->
          <div class="box">

            <!--Start Form-->
            <form action="cart.php" method="POST" enctype="multipart-form-data">

              <h1>Shopping Cart</h1>

              <p class="text-muted">You currently have 4 item(s) in your cart</p>

              <!--Start Table Responsive-->
              <div class="table-responsive">

              <table class="table">

                <thead>
                  <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th colspan="1">Delete</th>
                    <th colspan="2">Sub Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>
                      <img src="admin_area/product_images/product-one.jpg">
                    </td>

                    <td>
                      <a href="#">Market Basket</a>
                    </td>

                    <td>
                      2
                    </td>

                    <td>
                      $50.0
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      $100.00
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <img src="admin_area/product_images/product-one.jpg">
                    </td>

                    <td>
                      <a href="#">Market Basket</a>
                    </td>

                    <td>
                      2
                    </td>

                    <td>
                      $50.0
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      $100.00
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <img src="admin_area/product_images/product-one.jpg">
                    </td>

                    <td>
                      <a href="#">Market Basket</a>
                    </td>

                    <td>
                      2
                    </td>

                    <td>
                      $50.0
                    </td>

                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>

                    <td>
                      $100.00
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <th colspan="5">Total</th>
                  </tr>
                  <th colspan="2">$100</th>
                </tfoot>
                
              </table>

            </div>
              <!--End Table Responsive-->

              <!--Start Footer-->
              <div class="box-footer">

                <!--Start Pull Left-->
                <div class="pull-left">

                  <a href="index.php" class="btn btn-outline-dark btn-sm"><i class="fa fa-chevron-left"></i>Continue Shopping</a>
                  
                </div>
                <!--End Pull Left-->

                <!--Start Pull Right-->
                <div class="pull-right">

                  <button class="btn btn-outline-dark btn-sm" type="submit" name="update" value="Update Cart">
                    <i class="fa fa-refresh"></i>
                    Update Cart
                  </button>

                  <a href="checkout.php" class="btn btn-success btn-sm"><i class="fa fa-chevron-right"></i>Proceed to checkout</a>
                  
                </div>
                <!--End Pull Right-->
                
              </div>
              <!--End Footer-->
            </form>
            <!--End Form-->
          </div>
          <!--End Box-->



        </div>
        <!--End col-md-9-->

        <!--Start col-md-3-->
        <div class="col-md-3">

          <!--Start Box-->
          <div class="box" id="order-summary">

            <!--Start Box Header-->
            <div class="box-header">
              <h3>Order Summary</h3>
              
            </div>
            <!--End Box Header-->

            <p class="text-muted">
              Shipping and additional costs are calculated based on the values you have entered
            </p>

            <!--Start Table Responsive-->
            <div class="table-responsive">

              <table class="table">

                <tbody>
                  
                  <tr>
                    <td>Order Subtotal</td>
                    <th>$200.00</th>
                  </tr>

                  <tr>
                    <td>Shipping and handling</td>
                    <td>$0.00</td>
                  </tr>

                  <tr>
                    
                    <td>Tax</td>
                    <th>$0.00</th>

                  </tr>

                  <tr class="total">
                    <td>Total</td>
                    <td>$200.00</td>                    
                  </tr>

                </tbody>
                
              </table>
              
            </div>
            <!--End Table Responsive-->
            
          </div>
          <!--End Box-->
          
        </div>
        <!--End Col-md-3-->

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