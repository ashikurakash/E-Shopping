<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOME </title>
    <link rel="icon" href="Media//Shoppic_Icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-product-cards/1.0.0/bootstrap-product-pages.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="logo">
            <a href="#">
                <img src="Media/logo.png">
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
                <a href="profile page.php">
                        <img src="Media/user.png"></a>

      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM registration ');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
              <h4 class="profile"><?= $row['RLname'] ?></h4>
      <?php endwhile; ?>

      
    </div>
  </div>
                </div>
                
            </div>
        </div>

        <div class="Navbar">
            <ul>
                <li><a class="active" href="home.php">HOME</a></li>
                <li><a class="line" href="popular products.php">PRODUCTS</a></li>
                <li><a class="line" href="categories.php">CATEGORIES</a></li>
                <li><a class="line" href="about.php">ABOUT</a></li>
                <li><a class="line" href="#footer">CONTACT</a></li>

            </div>
        </div>


        <div class="slider">
            <div class="slides">
                <div class="slide">
                <a href="Aproduct_page.php">
                      <img src="Media/banner_iphone.jpg" alt="" /></a>
                </div>
                <div class="slide">
                <a href="Sproduct_page.php">
                    <img src="Media/Samsung-S23-Ultra.png" alt="" /></a>
          
                </div>
                <div class="slide">
                <a href="Mproduct_page.php">
                    <img src="Media/banner_mac.jpg" alt="" />
                </div></a>
            </div>
            <div class="slide-controls">
                <button id="prev-btn">
                <i class="fas fa-chevron-left"></i>
              </button>
                <button id="next-btn">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
            <script src="slider.js"></script>

        </div><br>
        <center><h2 > Featured products</h2></center>
    

        <!-- Navbar start -->
  <nav class="navbar navbar-expand-md ">
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
        <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM featured_products');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="270">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fa-regular fa-bangladeshi-taka-sign">৳</i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
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
          window.scrollTo(0, 880);
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