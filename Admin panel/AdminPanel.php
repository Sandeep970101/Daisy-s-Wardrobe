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


    <div class="container">
    <div class="title"><h2 style="padding-top: 20px;">Add Product</h2></div><br>
    <div class="content">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Product Name : </span>
                <input type="text" placeholder="enter product name" name="product_name" >
            </div><br>
            <div class="input-box">
                <span class="details">Product Price : </span>
                <input type="text" placeholder="enter product price" name="product_price" >
            </div><br>
            
            <select name="product_cat" class="input-box box">
                <option value="Mens_Ware">Men's Ware</option>
                <option value="Womens_Ware"> Women's Ware</option>
                <option value="Kids_Ware">Kid's Ware</option>
                <!-- <option value="Footware">Footware</option> -->
                </select><br><br>
            <div class="input-box">
                <span class="details">Product Image</span>
                <input type="file" accept="image/png, image/jpeg, image/jpg, image/jfif, image/webp" name="product_image" class="box">
            </div><br>
            
        </div><br>
        
        <div class="button">
          <input type="submit" name="add_product" value="Add product"><br><br>
          <a href="ViewProduct.php"><input type="submit" name="view_products" value="View All Products"><br><br><br></a>
      
          
        </div>
      </form>
    </div>
  </div>





<?php

    include 'dbh.con.php';

    // Product insert
    if (isset($_POST['add_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $product_cat = $_POST['product_cat'];
    $product_image = $_FILES['product_image']['name'];

    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];

    $product_image_folder = 'Products/' .$product_image;

    

    if (empty($product_name) || empty($product_price) || empty($product_cat) || empty($product_image)) {
        $message[] = 'please fill out all';
    } else {
        $insert = "INSERT INTO product (product_name,product_price,product_cat,product_image) VALUES ('$product_name', '$product_price','$product_cat','$product_image');";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            
            $message[] = 'new product added successfully';
        } else {
            $message[] = 'could not add the product';
        }
    }
    }

    // Delete option
    // if (isset($_GET['del'])) {
    // $id = $_GET['del'];
    // mysqli_query($conn, "DELETE FROM products  WHERE product_id = $id");
    // mysqli_query($conn, "ALTER TABLE products AUTO_INCREMENT = 1");
    // // ALTER TABLE products AUTO_INCREMENT = 1;
    // header('location:AdminPanel.php');
    // };
    // if (isset($_POST['ViewProducts'])) {
    // header('location:AdminPanel.php');
    // }

?>
        <?php
    
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
    

    ?>
  


    

</body>


<?php ?>



<?php include 'footer.php' ?>

</html>
