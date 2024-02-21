<?php 
    // session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="header&footer.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="viewP.css">
    <!-- <link rel="stylesheet" href="womens.css">
    <link rel="stylesheet" href="cart.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > 
</head>
<body>

    <div id ="header">
        <a href="#"><img src="img/logotstA.png" class="logo" width="300" height="70" alt=""></a>
        <div>
            <ul id="navbar">
                <!-- <form action=""></form> -->
                <a href="AdminSin.php"><button class="btn-login" type="submit"><span> </span>Log Out</button></a>    
            </ul>
        </div>
        
    </div>
    <div class="categories" style="background: -webkit-linear-gradient(left, wheat, #7715a0);" style="height: 600px;" >
        <h1 style="text-align:center ;">#AdminPanel</h1>
        <form action="" class="search-bar-Addmin">
            <input type="text" placeholder="Search" name="q">
            <button type="submit"><img src="img/search.svg" alt=""></button>
        </form>
    </div><br><br>




 <div class="categories">
        <h1 style="text-align:center ;">#All products</h1>
        
    </div>

    


    <div class="container text-center shop-content">
        <div class="row">

            <?php 

                include "dbh.con.php";
                // $split=0;

                $query = "SELECT * FROM product";
                $query_run = mysqli_query($conn, $query);
                $check_product = mysqli_fetch_array($query_run) >0;

                if($check_product){
                    while($row = mysqli_fetch_array($query_run)){

                        ?>

                        <div class="col" id="product-box">
                        <img class="product-img" src="Products/ <?php echo $row['product_image']; ?>" alt="product image">
                        <h2 class="product-title"> <?php echo $row['product_name']; ?> </h2>
                        <span class="price"><?php echo $row['product_price']; ?></span>
                        <div><button class="addtocart">Delete Product</button></div>
                        </div>

                        <?php

                            // $split++;   
                            // if ($split%4==0){
                            //     echo '</tr><tr>';
                            // }

                        
                    }
                }
                else{
                    echo "No product fount";
                }

            ?>
          
        </div>
        <div class="row">
            
      </div>

      
        
        
    </div>




</body>

<?php include 'footer.php' ?>

</html>