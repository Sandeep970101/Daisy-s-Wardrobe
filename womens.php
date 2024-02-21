<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy’s Wardrobe</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="womens.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >  
</head>

<body>


    <div id ="header">
        <a href="index.php"><img src="img/logotst.png" class="logo" width="300" height="70" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="womens.php">Women's</a></li>
                <li><a href="mens.php">Men's</a></li>
                <li><a href="kids.php">Kid's</a></li>
                <li class="cart-nav"><a href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                </svg><span class ="cart-quantity">0</span> </a></li>
                <a href="signUpform.php"><button class="btn-login"><span> </span>Log in</button></a>
               
                
            </ul>
        </div>
    </div>
    
    
    <div class="main-banner">
        <div class="banner"  role="search">
            <form action="" class="search-bar-line" method="POST">
                <input type="text" placeholder="Search" name="searchText" id="search">
                <button id="search" name="searchBtn" value="Search" id="searchText"  type="submit"><img src="img/search.svg" alt=""></button>
                <?php

                include 'dbh.con.php';

                if (isset($_POST['searchBtn'])) {
                    $text = $_POST['searchText'];
                    $sql = "SELECT * FROM product WHERE product_name LIKE '%{$text}%' LIMIT 5";
                    if ($query_run = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_array($query_run)) {
                                echo '<div class="row" style=""; cursor: pointer;">';
                                echo '<div class="col">';
                                echo '<img src="Products/' . $row['product_image'] . '" class="img-fluid rounded">';
                                echo '</div>';
                                echo '<div class="col-md-9 srchtxt" style=""><a onclick="loadProduct('.$row['product_id'].')">' . $row['product_name'] . '</a></div>';
                                echo '</div>';
                            }
                            echo '<button id="clear-btn" class="btn btn-sm btn-primary">Clear</button>';
                        }
                    } else {
                        echo '<div class="col-md-9" style="padding-top:20px">Products not found</div>';
                    }
                }
                ?>
        


            </form> 
            <h1 style=" padding-top: 10px;">#Women's Wear</h1>
        <p style=" padding-bottom: 10px;">Sign up now & get 10% off your first order!</p>

            
        
            <a href="signUpform.php"><button class="btn1-line"><span> </span> Sign Up here!</button></a>
        
        </div>
        <div class="line">  
             <!-- dont remove this 'line' div.. -->
        </div>
        
    </div>

    

    <!-- <dir></dir>shop-container -->

    <div class="categories">
        <h1 style="text-align:center ;">#Categories</h1>
            
    </div>
        
    <div class="container text-center cat section-p1">
        <div class="row">
          <div class="col" id="w-footware">
            <img class="footware-img" src="img/categories/wfoot.jpg" alt="">
                <h2 class="footware-title">Footwear</h2>
          </div>
          <div class="col" id="w-clothes">
            <img class="clothes-img" src="img/categories/w-c.jpeg" alt="">
                <h2 class="clothes-title">Clothes</h2>
          </div>
          <div class="col"  id="w-jewelry">
            <img class="jewelry-img" src="img/categories/jj.jpg" alt="">
            <h2 class="jewelry-title">jewelry</h2>
        </div>
          
        </div>
    </div>




    <div class="categories">
        <h1 style="text-align:center ;">#Feature Products</h1>

        
    </div>


    <div class="container text-center shop-content">
        <div class="row">

        <?php 

        include "dbh.con.php";




            $query = "SELECT * FROM product";
            $query_run = mysqli_query($conn, $query);
            $check_product = mysqli_fetch_array($query_run) >0;

                if($check_product){
                    while($row = mysqli_fetch_array($query_run)){

            ?>

                    <div class="col" id="product-box">
                    <img class="product-img" src="Products/Summer Tops for Women Ruffle Sleeve Shirt_.jpg " alt="product-image">
                    <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
                    <span class="price"><?php echo $row['product_price']; ?></span>
                    <div><button class="addtocart">Add To Cart</button></div>
                    </div>

                    <div class="col" id="product-box">
                    <img class="product-img" src="Products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg " alt="product-image">
                    <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
                    <span class="price"><?php echo $row['product_price']; ?></span>
                    <div><button class="addtocart">Add To Cart</button></div>
                    </div>

                    <div class="col" id="product-box">
                    <img class="product-img" src="Products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg " alt="product-image">
                    <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
                    <span class="price"><?php echo $row['product_price']; ?></span>
                    <div><button class="addtocart">Add To Cart</button></div>
                    </div>

                    <div class="col" id="product-box">
                    <img class="product-img" src="Products/71DWpwGPIhL._AC_UX385_.jpg " alt="product-image">
                    <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
                    <span class="price"><?php echo $row['product_price']; ?></span>
                    <div><button class="addtocart">Add To Cart</button></div>
                    </div>

                        <?php     
                        

                        
                    }
                }
                else{
                    echo "No product fount";
                }

            ?>


            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg" alt="">
                <h2 class="product-title">Womens Summer Tank</h2>
                <span class="price">1100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/The Drop Women's Sydney Short-sleeve Cropped Crew Neck T-shirt.jpg" alt="">
                <h2 class="product-title">Drop Neck T-shirt</h2>
                <span class="price">2000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg" alt="">
                <h2 class="product-title">Tops Shirts</h2>
                <span class="price">1200.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Long Sleeve Blouses for Women Business Causal Dressy Boho Tops.jpg" alt="">
                <h2 class="product-title">Long Sleeve Blouse</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div> -->
          
        </div>
        

      

    <!-- <div class="shop-content"> -->
        <!-- <script src="main.js"></script> -->
        
        
    </div>

    <!-- <div class="categories">
        <h1 style="text-align:center ;">#Footwear</h1>
        
    </div> -->


    <div class="container text-center shop-content">
        <div class="row">

        <?php 

include "dbh.con.php";




$query = "SELECT * FROM product";
$query_run = mysqli_query($conn, $query);
$check_product = mysqli_fetch_array($query_run) >0;

    if($check_product){
        while($row = mysqli_fetch_array($query_run)){

            ?>

            <div class="col" id="product-box">
            <img class="product-img" src=" Products/Summer Tops for Women Ruffle Sleeve Shirt_.jpg " alt="product-image">
            <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
            <span class="price"><?php echo $row['product_price']; ?></span>
            <div><button class="addtocart">Add To Cart</button></div>
            </div>

            <div class="col" id="product-box">
            <img class="product-img" src="Products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg " alt="product-image">
            <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
            <span class="price"><?php echo $row['product_price']; ?></span>
            <div><button class="addtocart">Add To Cart</button></div>
            </div>

            <div class="col" id="product-box">
            <img class="product-img" src="Products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg " alt="product-image">
            <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
            <span class="price"><?php echo $row['product_price']; ?></span>
            <div><button class="addtocart">Add To Cart</button></div>
            </div>

            <div class="col" id="product-box">
            <img class="product-img" src="Products/71DWpwGPIhL._AC_UX385_.jpg " alt="product-image">
            <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
            <span class="price"><?php echo $row['product_price']; ?></span>
            <div><button class="addtocart">Add To Cart</button></div>
            </div>

            <?php     
            

            
        }
    }
    else{
        echo "No product fount";
    }

?>

            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg" alt="">
                <h2 class="product-title">Womens Summer Tank</h2>
                <span class="price">1100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/The Drop Women's Sydney Short-sleeve Cropped Crew Neck T-shirt.jpg" alt="">
                <h2 class="product-title">Drop Neck T-shirt</h2>
                <span class="price">2000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg" alt="">
                <h2 class="product-title">Tops Shirts</h2>
                <span class="price">1200.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Long Sleeve Blouses for Women Business Causal Dressy Boho Tops.jpg" alt="">
                <h2 class="product-title">Long Sleeve Blouse</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div> -->
          
        </div>
        <div class="row">
            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Levi's Women's 721 High Rise Skinny Jeans_.jpg " alt="">
                <h2 class="product-title">Levi's Women's Jeans</h2>
                <span class="price">2100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/Flowy Basic Blouse Tees_.jpg" alt="">
                <h2 class="product-title">Flowy Basic Blouse Tees</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Summer Tops for Women Ruffle Sleeve Shirt_.jpg" alt="">
                <h2 class="product-title">Ruffle Sleeve Shirt</h2>
                <span class="price">1000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Vetinee Women's Tulip Hem Shirred Washed Casual Bodycon Short Jean Denim Skirt.jpg" alt="">
                <h2 class="product-title">Jean Denim Skirt</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
                
            </div> -->
      </div>

      

    <!-- <div class="shop-content"> -->
        <!-- <script src="main.js"></script> -->
        
        
    </div>

    <!-- <div class="categories">
        <h1 style="text-align:center ;">#Clothes</h1>
        
    </div> -->


    <div class="container text-center shop-content">
        <div class="row">
            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg" alt="">
                <h2 class="product-title">Womens Summer Tank</h2>
                <span class="price">1100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/The Drop Women's Sydney Short-sleeve Cropped Crew Neck T-shirt.jpg" alt="">
                <h2 class="product-title">Drop Neck T-shirt</h2>
                <span class="price">2000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg" alt="">
                <h2 class="product-title">Tops Shirts</h2>
                <span class="price">1200.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Long Sleeve Blouses for Women Business Causal Dressy Boho Tops.jpg" alt="">
                <h2 class="product-title">Long Sleeve Blouse</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div> -->
          
        </div>
        <div class="row">
            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Levi's Women's 721 High Rise Skinny Jeans_.jpg " alt="">
                <h2 class="product-title">Levi's Women's Jeans</h2>
                <span class="price">2100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/Flowy Basic Blouse Tees_.jpg" alt="">
                <h2 class="product-title">Flowy Basic Blouse Tees</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Summer Tops for Women Ruffle Sleeve Shirt_.jpg" alt="">
                <h2 class="product-title">Ruffle Sleeve Shirt</h2>
                <span class="price">1000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Vetinee Women's Tulip Hem Shirred Washed Casual Bodycon Short Jean Denim Skirt.jpg" alt="">
                <h2 class="product-title">Jean Denim Skirt</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
                
            </div> -->
      </div>

      

    <!-- <div class="shop-content"> -->
        <!-- <script src="main.js"></script> -->
        
        
    </div>

    <!-- <div class="categories">
        <h1 style="text-align:center ;">#jewelry</h1>
        
    </div> -->


    <div class="container text-center shop-content">
        <div class="row">
            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Womens Silk Satin Tank Tops V Neck Casual Cami Sleeveless Camisole Blouses Summer Basic Tank Shirt.jpg" alt="">
                <h2 class="product-title">Womens Summer Tank</h2>
                <span class="price">1100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/The Drop Women's Sydney Short-sleeve Cropped Crew Neck T-shirt.jpg" alt="">
                <h2 class="product-title">Drop Neck T-shirt</h2>
                <span class="price">2000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Elegant Casual V Neck Chiffon Blouses Tops Shirts.jpg" alt="">
                <h2 class="product-title">Tops Shirts</h2>
                <span class="price">1200.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Women Long Sleeve Blouses for Women Business Causal Dressy Boho Tops.jpg" alt="">
                <h2 class="product-title">Long Sleeve Blouse</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div> -->
          
        </div>
        <div class="row">
            <!-- <div class="col" id="product-box">
                <img class="product-img" src="img/products/Levi's Women's 721 High Rise Skinny Jeans_.jpg " alt="">
                <h2 class="product-title">Levi's Women's Jeans</h2>
                <span class="price">2100.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/Flowy Basic Blouse Tees_.jpg" alt="">
                <h2 class="product-title">Flowy Basic Blouse Tees</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Summer Tops for Women Ruffle Sleeve Shirt_.jpg" alt="">
                <h2 class="product-title">Ruffle Sleeve Shirt</h2>
                <span class="price">1000.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
            
            </div>
            <div class="col" id="product-box">
                <img class="product-img" src="img/products/Vetinee Women's Tulip Hem Shirred Washed Casual Bodycon Short Jean Denim Skirt.jpg" alt="">
                <h2 class="product-title">Jean Denim Skirt</h2>
                <span class="price">1800.rs</span>
                <div><button class="addtocart">Add To Cart</button></div>
                
            </div> -->
      </div>

      

    <!-- <div class="shop-content"> -->
        <!-- <script src="main.js"></script> -->
        
        
    </div>

    <h5  class="textColor1" style="color: red; text-align: center; padding-bottom: 20px;">  *Please be aware that our deliveries will be delayed due to the prevailing situation of the country.Sorry for the inconveniences.</h5>

</body>    

 
                            <!--  FOOTER  -->


 <?php include 'footer.php' ?>


</html>
