<?php 

    include 'dbh.con.php';

    if(isset($_GET['search']))
    {
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM products WHERE CONCAT(product_name,product_price,product_cat,product_image) LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
            {
                ?>
                <tr>
                    <td><?= $items['product_name']; ?></td>
                    <td><?= $items['product_price']; ?></td>
                    <td><?= $items['product_cat']; ?></td>
                    <td><?= $items['product_image']; ?></td>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                    
        
                </tr>
            <?php
        }
    }
?>                                  