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
    <title>PixelPulse Tech</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="fade-in about">
    
    <header>

        
        <div class="logo">
            <a href="http://localhost/project/index.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contacts.php">Contact</a></li>
                <li><a href="http://localhost/project/profile.php">Account</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="title">
            <h1>ABOUT THE DEVELOPERS</h1>
        </section>
        <section class="main">
            <p>Pixel Pulse Tech is a website created by six computer engineering students who are passionate about everything related to gaming tech that aims to provide users highly acclaimed recommendations of the latest and greatest of the PC Gaming World, from budget and affordable to high-end products. Pixel Pulse Tech brings you easy-to-digest details all about Personal Computing, from CPUs and GPUs to Keyboards, Mouses and Monitors.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 PixelPulse Tech. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>