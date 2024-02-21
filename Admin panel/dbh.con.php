<?php 

$Server ="localhost";
$User = "root";
$Pass = "";
$database = "daisys";



    $conn = mysqli_connect($Server,$User,$Pass,$database);

    if(!$conn){
        die("Connection Failed : ".mysqli_connect_error());
        
        
    }

?>