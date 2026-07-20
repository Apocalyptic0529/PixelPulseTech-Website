<?php 
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid']))
    {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixelPulse Tech Profile</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="styleko.css">
    <title>Change Profile</title>
</head>

<header>
        <div class="nav">

            <div class="logo">
            <h6>Change your profile.</h6>
            </div>

            <div class="right-links">
            <a href="index.php"><button class="btn">Home</button></a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
            
            </div> 

        </div>
</header>

<section class="pflogo"><img src="images/logo.png" alt="PixelPulse Tech Logo"></section>

<body>
    
    <div class="container">
        <div class="box form-box">
            <?php
                if(isset($_POST['submit']))
                {
                    $username = $_POST['username'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];

                    $id = $_SESSION['id'];

                    $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE ID=$id ") or die("Error Occured");

                    if($edit_query)
                    {
                        echo "<div class='message'>
                            <p>Profile Updated!</p>
                            </div><br>";
                        echo "<a href='index.php'><button class='btn'>Go To Home</button></a> ";
                    }
                }else{
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT * FROM users WHERE ID=$id");

                    while($result = mysqli_fetch_assoc($query))
                    {
                        $res_Uname = $result['Username'];
                        $res_Age = $result['Age'];
                        $res_Email = $result['Email'];
                        
                    }
                

            ?>
            <header class="heder2">Change Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username*</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Age*</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age ?>" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email*</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email ?>" autocomplete="off" required>
                </div>

                
 
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update"  required>
                </div>
                
            </form>
        </div>
        <?php } ?>
    </div>
    <section><br><br><br><br><br><br><br><br></section>

    <footer>
        <p>&copy; 2024 PixelPulse Tech. All rights reserved.</p>
    </footer>
</body>
</html>