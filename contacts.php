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
<body class="fade-in contact">
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
            <h1>MEET THE DEVELOPERS</h1>
        </section>
        <section class="main">
            
            <p>
                Capudoy, Ashton Caleb <br>
                rc.ashtoncaleb.capudoy@cvsu.edu.ph <br>
                09561922993 <br> 
                <br><br>
                Fajardo, Serdhel Claus <br>
                serdhelclaus.fajardo@cvu.edu.ph <br>
                09456352669 <br>
                <br><br>
                Curameng, Frank Lorenz <br> 
                rc.franklorenz.curameng@cvu.edu.ph <br>
                09296315401 <br> 
                <br><br>
                Bolima, Louis Benedict <br>
                rc.louisbenedict.bolima@cvsu.edu.ph <br>  
                09604530919 <br>
                <br><br>
                Villa, Christian Jay <br> 
                rc.christianjay.villa@cvu.edu.ph <br>
                0905125743 <br>
                <br><br>
                Villaranda, Ouen <br>
                rc.ouen.villaranda@cvu.edu.ph <br>
                09762129904 <br></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 PixelPulse Tech. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>