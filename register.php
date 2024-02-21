
<?php


    
    require_once "dbh.con.php";
    require_once "signUp.validations.php";

    // Function for register a new user
    function registerNewUser($conn,$name,$email,$mobile,$pass){
        // Password encryption
        $passHashed = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name,email,mobile,password) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: index.php?err=failedstmt");
        }
        else{
           
            mysqli_stmt_bind_param($stmt, "ssss",$name,$email,$mobile,$passHashed);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header("location: index.php?err=noerrors");
        }
    }

    // If user clicks the register button
    if(isset($_POST['register-btn'])){
        // Get form input data
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        

        // Input validation
        if(inputsEmptyRegister($name,$email,$mobile,$pass)){
            header("location: sUp.php?err=empty_inputs");
            // exit();
        }
        else if(nameInvalid($name)){
            header("location: sUp.php?err=invalid_name");
        }
        else if(emailInvalid($email)){
            header("location: sUp.php?err=invalid_email");
        }
        // else if(mobileInvalid($mobile)){
        //     header("location: sUp.php?err=invalid_mobile");
        // }
        
        else if(passwordInvalid($pass)){
            header("location: sUp.php?err=invalid_password");
        }
        
        else{
            // If all inputs are error free
            registerNewUser($conn,$name,$email,$mobile,$pass);
            
        }
    }
    else{
        header("location: index.php");
        // exit();
        
    }

    

?>
