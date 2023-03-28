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
                <li><a class="line" href="home.php">HOME</a></li>
                <li><a class="line" href="popular products.php">PRODUCTS</a></li>
                <li><a class="line" href="categories.php">CATEGORIES</a></li>
                <li><a class="active" href="#">ABOUT</a></li>
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

        </div>

        <div class="about-us">
        <div class="headline">
            About us
        </div>
        <p>
            Welcome to Shoppic, your one-stop-shop for all your gadget and gear needs! We are a premier online retailer of the latest and greatest technology products, offering an extensive range of high-quality gadgets, electronics, and accessories. Our mission is to provide our customers with a seamless online shopping experience, offering them a wide selection of cutting-edge products at competitive prices.
        </p><br>

        <p>
            At Shoppic, we pride ourselves on our exceptional customer service, ensuring that every purchase is handled with care and attention to detail. We work hard to source the best products from leading manufacturers and suppliers, and we are constantly adding new items to our inventory to keep up with the latest trends and technologies.
        </p><br>

        <p>
            Our product range includes everything from smartphones and tablets to laptops, gaming consoles, and smart home devices. We also carry a wide selection of accessories and peripherals, such as phone cases, chargers, headphones, and more, to help you get the most out of your devices. All of our products are carefully selected for their quality, reliability, and functionality, and we stand behind every item we sell with a full warranty.
        </p><br>

        <p>
            At Shoppic, we are committed to providing our customers with the best possible shopping experience. Our website is user-friendly and easy to navigate, with detailed product descriptions, high-quality images, and customer reviews to help you make informed purchasing decisions. We also offer fast and reliable shipping, with most orders shipped within 24 hours of purchase.
        </p><br>

        <p>
            We understand that shopping for gadgets and gears can be overwhelming, which is why we have a dedicated team of experts on hand to help you with any questions or concerns you may have. Our knowledgeable customer support team is available via phone, email, or live chat, and they are always happy to help you find the perfect product for your needs.
        </p><br>

        <p>
            At Shoppic, we believe that technology should be accessible to everyone, which is why we offer competitive pricing on all of our products. We also run frequent promotions and sales, so be sure to sign up for our newsletter to stay up-to-date on our latest offers and deals.
        </p><br>
        <p>
            Whether you're a tech enthusiast or just looking for the latest gadgets and gear, Shoppic has everything you need to stay connected and productive. Shop with us today and experience the best in online gadget and gear shopping!
        </p>
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