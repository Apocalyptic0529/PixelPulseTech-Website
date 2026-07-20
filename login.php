<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelPulse Tech Login</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="styleko.css">
    <title>Login</title>
</head>
<body>   
    <section class="pflogo"><img src="images/logo.png" alt="PixelPulse Tech Logo" width="500px"></section>
    <div class="container">
        <div class="box form-box">
            <?php
                include("php/config.php");
                if(isset($_POST['submit']))
                {
                    $email = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                        if(is_array($row) && !empty($row))
                        {
                            $_SESSION['valid'] = $row['Email'];
                            $_SESSION['age'] = $row['Age'];
                            $_SESSION['username'] = $row['Username'];
                            $_SESSION['id'] = $row['ID'];
                        }else
                            {
                                echo "<div class='message'>
                                    <p>Wrong Username or Password!</p>
                                    </div> <br>";
                                echo "<a href='login.php'> <button class='btn'> Go back </button></a> ";
                            }
                            if(isset($_SESSION['valid']))
                            {
                                header("Location: index.php");
                            }
                }else{
            ?>

            <header class="heder2">Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login"  autocomplete="off" required>
                </div>
                <div class="links">
                    Don't have account yet? <a href="register.php">Sign Up</a>
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