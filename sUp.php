
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="signUpform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="" style="background-color:white ; padding : 60px 120px 60px 120px">
            

        <form action="register.php" method="POST">
            <h2>Sign Up</h2>

            <label for="">
                <span>Name</span>
                <input type="text" name="name" placeholder="eg-: John" required>
            </label>
            <label for="">
                <span>Email</span>
                <input type="email" name="email" placeholder="example@gmail.com" required>
            </label>
            <label for="">
                <span>Mobile number</span>
                <input type="text" name="mobile" placeholder="eg-: 071234567" required>
            </label>
            <label for="">
                <span>Password</span>
                <input type="password" name="password" placeholder="At least 5 characters" required>
            </label>
            <button class="submit" name="register-btn" type="submit">Sign Up</button>

        </form>
           
        </div>

        

       
    
</body>
</html>