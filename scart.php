<?php 

include_once 'includes/dbh.inc.php';


?>







<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add To Cart - Furniture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>

    <!-- header  -->
    <header>            
            <div class = "cart-container">
              <div class = "cart-list">
                <!-- single item -->
                <div class = "cart-item">
                  <img src = "images/armchair.png" alt = "product image">
                  <div class = "cart-item-info">
                    <h3 class = "cart-item-name">Arm Chair</h3>
                    <span class = "cart-item-category">Chair</span>
                    <span class = "cart-item-price">$120.00</span>
                  </div>

                  <button type = "button" class = "cart-item-del-btn">
                    <i class = "fas fa-times"></i>
                  </button>
                </div>
                <!-- end of single item  -->
              </div>

              <div class = "cart-total">
                <h3>Total: $</h3>
                <span id = "cart-total-value"></span>
              </div>
            </div>
          </div>
        </nav>
        <!-- end of navbar -->

        <!-- banner -->
        <div class = "banner">
          <div class = "banner-content">
            <h1>Furniture For Your Home</h1>
            <p class = "text">If you want to decorate your home with some of the most modern kitchens, bedrooms or living rooms, YOU are on right place. Take a look on our shop!</p>
            <div class = "btns">
            </div>
          </div>

          <div class = "banner-img">
            <img src = "banner-img.png" alt = "furniture banner image">
          </div>
        </div>
        <!-- end of banner  -->
      </div>
    </header>
    <!-- end of header -->

    <!-- products section  -->
    <section class = "products">
      <div class = "container">
        <h2>Our Products</h2>
        <div class = "product-list">
			<div class = "product-item">
            
			<div class = "product-img">
              <img src = "img2.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
              	$sql = "SELECT ime FROM furn WHERE id='1';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='1';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='1';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			
			<div class = "product-img">
              <img src = "img3.jpg" alt = "product image">              
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='2';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='2';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='2';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			
			
			<div class = "product-img">
              <img src = "img4.jpeg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='3';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='3';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='3';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			
			<div class = "product-img">
              <img src = "img5.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='4';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='4';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='4';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			<div class = "product-img">
              <img src = "img6.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='5';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='5';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='5';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			
			<div class = "product-img">
              <img src = "img7.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='6';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='6';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='6';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			<div class = "product-img">
              <img src = "photo1.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='7';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='7';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='7';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			<div class = "product-img">
              <img src = "photo2.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='8';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='8';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='8';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			<div class = "product-img">
              <img src = "k1.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='9';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='9';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='9';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			<div class = "product-img">
              <img src = "k2.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='10';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='10';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='10';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
			
			<div class = "product-img">
              <img src = "k3.jpg" alt = "product image">
            </div>

            <div class = "product-content">
              <h3 class = "product-name"><?php
            $sql = "SELECT ime FROM furn WHERE id='11';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['ime'];
                }
            }


            ?></h3>
              <span class = "product-category"><?php
            $sql = "SELECT kategorija FROM furn WHERE id='11';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['kategorija'];
                }
            }


            ?></span>
              <p class = "product-price"><?php
            $sql = "SELECT cijena FROM furn WHERE id='11';"; 
            $result = mysqli_query($conn, $sql); 
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['cijena'];
                }
            }


            ?></p>
            </div>
			
          </div>
        </div>
      </div>
    </section>
    <!-- end of products section -->

    <!-- footer -->
    <footer>
      <div class = "footer-banner">
        <div class = "container">
          <h2>Unlimited Furniture Collection</h2>
          <p class = "text">If you want to decorate your home with some of the most modern kitchens, bedrooms or living rooms, YOU are on right place. Take a look on our shop!</p>
          
        </div>
      </div>

      <div class = "container">
        <div class = "social-icons">
          <a href = "#">
            <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-pinterest"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </footer>
    <!-- end of footer -->

    



    
    
    <script src="app.js"></script>
  </body>
</html>