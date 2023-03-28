<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User </title>
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
                <li><a class="line" href="about.php">ABOUT</a></li>
                <li><a class="line" href="#footer">CONTACT</a></li>

            </div>
        </div>


    <div class="container mt-4">

        <center><div class="row">
        <center><div class="col-md-12">
        <center><div class="card">
        <center><div class="card-header">
                    
                    </div>
                    <div class="col-md-8">
                    <center><div class="h2">User Profile</div>
                    <center><table class="table table-striped">
					
			</div>
                                <?php 
                                    $query = "SELECT * FROM Registration";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                            <tr><th><i class="bi bi-envelope"></i> First name</th><td><?= $student['RFname']; ?></td>
                                            <tr><th><i class="bi bi-person-circle"></i> Last name</th><td><?= $student['RLname']; ?></td>
                                            <tr><th><i class="bi bi-person-square"></i> Email</th><td><?= $student['Remail']; ?></td>
                                            <tr><th><i class="bi bi-gender-ambiguous"></i> Phone no</th><td><?= $student['Rphone']; ?></td>
                                                
                                                
                                                
                                                

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                           
                            
                        </table>
                        <a href="\E-shopping/home.php" class="btn btn-primary float-end">Logout</a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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