
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="signUpform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"> -->
    
</head>
<body>
    
    <div class="cont">
        <form action="loginn.php" method="POST">
        <div class="form sign-in">
            <h2>Sign In</h2>
            <!-- <p class="error"><?php echo $error; ?></p><p class="success"> <?php echo $success; ?></p> -->
            <label>
                <span>Email Address</span>
                <input type="email" name="email" required>
            </label>
            
            <label for="">
                <span>Password</span>
                <input type="password" name="password" required>
            </label>
        
            <button class="submit" type="submit" name="log-in" >Sign In</button>
            <!-- <p class="forgot-pass">Forgot Password?</p> -->

            <div class="social-media">
                <ul>
                    
                    <li><img src="img/social media/facebook.png"></li>
                    <li><img src="img/social media/instagram.png"></li>
                    <li><img src="img/social media/twitter.png"></li>
                    <li><img src="img/social media/linkedin.png"></li>
                </ul>
            </div>
        </div>
        </form>    

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>New here?</h2>
                    <p>Sign up and discover latest fations</p>
                </div>
                <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in.We've missed you!</p>
                </div>
                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Sign Up</h2>

                <label>
                    <span>Name</span>
                    <input type="text" name="name">
                </label>
                <label>
                    <span>mobile number</span>
                    <input type="text" name="mobile">
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password">
                </label>
                <button class="submit" type="submit" >Sign Up Now</button>
                

            </div>
        </div>
    </div>

    w

    <script type="text/javascript" src="/main.js"></script>

    
</body>
</html>