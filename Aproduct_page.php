<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Apple 14 Pro Max </title>
    <link rel="icon" href="Media//Shoppic_Icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-product-cards/1.0.0/bootstrap-product-pages.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Product_style.css">
    
</head>

<body>
    <div class="main">
      <div id = "header-info">
        <div class="header">
            <div class="logo">
            <a href="home.php">
                <img src="Media/logo.png"></a>
            </div>
            <div class="search-wrapper">
                <input type="text" id="product-id" placeholder="Search for a product" />
                <div class="search-button">
                    <a href="#">
                        <img src="Media/Search-icon.png">
                    </a>
                </div>
            </div>

            <div class="login-status">
                <div class="avatar">
                    <a href="login.php">
                        <img src="Media/user.png">
                    <button class ="btn-signup" href="login.html"> Sign in/Sign up</button>
                </div>
                
            </div>
        </div>
      </div>
        

        <div class="Navbar">
            <ul>
                <li><a class="line" href="home.php">HOME</a></li>
                <li><a class="active" href="popular products.php">PRODUCTS</a></li>
                <li><a class="line" href="categories.php">CATEGORIES</a></li>
                <li><a class="line" href="about.php">ABOUT</a></li>
                <li><a class="line" href="#footer">CONTACT</a></li>

            </div>
        </div>


        <!-- Navbar start -->
        <nav class="navbar navbar-expand-md  bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    </button>
      <ul class="navbar-nav ml-center">

      <li class="nav-item">
          <h2 class="nav-link active"><i class=""></i></h2>
        </li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
        </li><li></li><li></li><li></li></li><li></li><li></li><li></li><li></li>
      <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
        <li class="nav-item">
        <a class="btn btn-info " href="checkout.php"><i class="far fa-credit-card"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->
    
    <!-- Displaying Products Start -->
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM iphone');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "image/smartphones/14 pro max.jpg">

            </div>
          </div>
          
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">iphone 14 pro max</h2>
          <!-- <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div> -->

          <div class = "product-price">
            <p class = "new-price">Product Price: <span>৳190,000.00/-</span></p>
          </div>

          <div class = "product-detail">
            <h2>Specifications: </h2>
           
            
            <b><ol>Battery Capacity 4352 mAh</ol></b> 
            <b><ol>Internal Memory 6 GB</ol></b>
            <b><ol>High screen-to-body ratio (88.45 %)</ol></b>
            <b><ol>Supports Wireless Charging</ol></b>
            <b><ol>Very strong build, excellent display</ol></b>   
            <b><ol>Operating System : IOS v16</ol></b>
            <b><ol>Next- level flagship cameras</ol></b>           
            <b><ol>Display Resolution 1290 x 2796 pixels</ol></b>

          </div>
            </div>
            <div class="card-footer">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-2">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

    

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>


    </div>
    <div id="footer">
        <div class = "contact-info">
            <div class="quick-menu">
                <h2>
                    Quick menu
                </h2>
                <a href="home.html"> HOME </a>
                <br>
                <a href="products.php"> PRODUCTS </a>
                <br>
                <a href="categories.php"> CATEGORIES </a>
                <br>
                <a href="about.php"> ABOUT </a>
                <br>
                <a href="#header-info"> BACK TO TOP </a>
            </div>
            <div class="contact">
                <h2>
                    Contact us
                </h2>
                <p>
                    <h3>
                        Head office
                    </h3>
                    Shoppic Limited
                    <br>
                    Agrabad, Commerce College Road, Chittagong
                    <br>
                    Contact: 017********
                    <br>
                    E-mail: <a href="mailtomailto:someone@example.com"> shoppicbd@business.com </a>
                </p>
            </div>
            <div class="Social">
                <h2>
                    Social Links
                </h2>
                <div class="social-links">
                    <a href="#"><img src="Media/Social/facebook.png"></a>
                    <a href="#"><img src="Media/Social/twitter.png"></a>
                    <a href="#"><img src="Media/Social/instagram.png"></a>
                    <a href="#"><img src="Media/Social/linkedin.png"></a>
                    <a href="#"><img src="Media/Social/email.png"></a>
                </div>
            </div>
        </div>
        <div class="copyright-info">
            Copyright &copy; 2000-2023 Shoppic Ltd. All rights reserved.
        </div>
    </div>
</body>

</html>