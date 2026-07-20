<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelPulse Tech Register</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="styleko.css">
</head>
<body>
    <section><br><br><br><br></section>
    <div class="container">
        <div class="box form-box">

            <?php

                include("php/config.php");
                if(isset($_POST['submit']))
                {
                      $username = $_POST['username'];
                      $age = $_POST['age'];
                      $email = $_POST['email'];
                      $password = $_POST['password']; 
                      
                      //verifying email
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                    
                    if(mysqli_num_rows($verify_query)!=0)
                    {
                        echo "<div class='message'>
                            <p>Email already Taken, Try Again </p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'> <button class='btn'> OK </button></a> ";    
                    }
                    else
                    {
                        mysqli_query($con,"INSERT INTO users (Username,Age,Email,Password) VALUES('$username','$age','$email','$password')") or die("ERROR OCURED");
                        
                        echo "<div class='message'>
                            <p>Registration Succesful!</p>
                            </div><br>";
                        echo "<a href='login.php'><button class='btn'>Login Now</button></a> ";
                    }
                }else{

            ?>


                    

            <header class="heder2">Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username*</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Age*</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email*</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password*</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register"  required>
                </div>
                <div class="links">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
        
        <?php } ?>
        
    </div>
    <footer>
        <p>&copy; 2024 PixelPulse Tech. All rights reserved.</p>
    </footer>
</body>
</html>