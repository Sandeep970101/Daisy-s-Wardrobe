<?php
    function inputsEmptyRegister($name, $email, $mobile, $pass){
        global $value;
        if(empty($name) || empty($mobile) || empty($email) || empty($pass)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    function inputsEmptyLogin($email,$pass){
        global $value;
        if(empty($email) || empty($pass)){
            $value = true;
        }else{
            $value = false;
        }
        return $value;
    }

    function nameInvalid($name){
        global $value;
        if(!preg_match("/^[a-z A-Z]+$/",$name)){
            $value = true;
        }
        
        else{
            $value = false;
        }
        return $value;
    }

    // function mobileInvalid($mobile){
    //     global $value;
    //     if(!preg_match("/^[0][\d]{12}$/",$mobile)){
    //         $value = true; 
    //     }
    //     else{
    //         $value = false;
    //     }
    //     return $value;
    // }
    
    function emailInvalid($email){
        global $value;
        if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/",$email)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }
    

   
    function passwordInvalid($pass){
        global $value;
        if(!preg_match("/^.{5,}$/",$pass)){
            $value = true; 
        }
        else{
            $value = false;
        }
        return $value;
    }

   


    // function emailOrMobileAvailable($conn, $email){
    //      global $value;
        
    //     $sql = "SELECT * FROM users WHERE email = ? ;";
    //     $stmt = mysqli_stmt_init($conn);
    //     // Bind the statement with the query and check errors
    //     if(!mysqli_stmt_prepare($stmt, $sql)){
    //         header("location: ../index.php?err=failedstmt");
    //         exit();
    //     }
    //     else{
            
    //         mysqli_stmt_bind_param($stmt, "s", $email);
    //         mysqli_stmt_execute($stmt);
    //         $data = mysqli_stmt_get_result($stmt);
    //         if(!mysqli_fetch_assoc($data)){
    //             $value = false;
    //         }
    //         else{
    //             $value = true;
    //         }
    //     }

    //     mysqli_stmt_close($stmt);

    //     return $value;
    // }
?>