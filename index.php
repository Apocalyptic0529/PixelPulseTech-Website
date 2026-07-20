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
<body class="fade-in">
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="PixelPulse Tech Logo">
        </div>

        <nav>
            <ul>

                <li><a href="about.php">About Us</a></li>
                <li><a href="contacts.php">Contacts</a></li>
                <li><a href="http://localhost/project/profile.php">Account</a></li>
                
                <div class="nav">
        

                    <div class="right-links">
            

                        <?php 
                            $id = $_SESSION['id'];
                            $query = mysqli_query($con,"SELECT * FROM users WHERE ID=$id");
                
                            while($result = mysqli_fetch_assoc($query))
                            {
                                $res_Uname = $result['Username'];
                                $res_Age = $result['Age'];
                                $res_Email = $result['Email'];
                                $res_id = $result['ID'];
                            }
                            echo "<a href='profile.php?ID=$res_id'><li></li></a>";
                        ?>

                        
                    </div>  
                </div>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Pixel Pulse Tech</h1>
                <p>Where you can get the best recommendations for current PC trends.</p>
            </div>
            <div class="slideshow">
                <div class="slide"><img src="images/intel i9.png" alt="Image 1"></div>
                <div class="slide"><img src="images/GPU 1.png" alt="Image 2"></div>
                <div class="slide"><img src="images/monitor 1.png" alt="Image 3"></div>
                <div class="slide"><img src="images/mouse 1.png" alt="Image 4"></div>
                <div class="slide"><img src="images/kb 1.png" alt="Image 5"></div>
            </div>
        </section>
        <section class="newest-releases">
            <h2>Newest Realeases</h2>
            <div class="product-list">
                <a href="CPU/item1.html" class="linkage">
                    <div class="product-item">
                        <img src="images/intel i9.png" alt="Product 1">
                        <h3>Intel Core i9 14900KS</h3>
                    </div>
                </a>
                <a href="GPU/item6.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 1.png" alt="Product 6">
                        <h3>MSI GeForce RTX™ 4060 VENTUS 2X OC 8GB GDDR6 128-bit Graphics Card</h3>
                    </div>
                </a>
                <a href="MONITOR/item11.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 1.png" alt="Product 11">
                        <h3>ROG Swift OLED PG49WCD 43"</h3>
                    </div>
                </a>
                <a href="MOUSE/item16.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 1.png" alt="Product 16">
                        <h3>Steel Series Aerox 9 Wireless Mouse</h3>
                    </div>
                </a>
                <a href="KEYBOARD/item21.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 1.png" alt="Product 21">
                        <h3>Razer BlackWidow V4 Pro</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="cpu">
            <h2>CPUs</h2>
            <div class="product-list">
                <a href="CPU/item1.html" class="linkage">
                    <div class="product-item">
                        <img src="images/intel i9.png" alt="Product 1">
                        <h3>Intel Core i9 14900KS</h3>
                    </div>
                </a>
                <a href="CPU/item2.html" class="linkage">
                    <div class="product-item">
                        <img src="images/intel i7.png" alt="Product 2">
                        <h3>Intel Core i7 14650HX</h3>
                    </div>
                 </a>
                <a href="CPU/item3.html" class="linkage">    
                    <div class="product-item">
                        <img src="images/intel i5.png" alt="Product 3">
                        <h3>Intel Core i5 14600</h3>
                    </div>
                </a>
                <a href="CPU/item4.html" class="linkage">
                    <div class="product-item">
                        <img src="images/ryzen 9.png" alt="Product 4">
                        <h3>AMD Ryzen 9 PRO 7945</h3>
                    </div>
                </a>
                <a href="CPU/item5.html" class="linkage">
                    <div class="product-item">
                    
                        <img src="images/ryzen 7.png" alt="Product 5">
                        <h3>AMD Ryzen 7 PRO 7745</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="gpu">
            <h2>GPUs</h2>
            <div class="product-list">
                <a href="GPU/item6.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 1.png" alt="Product 6">
                        <h3>MSI GeForce RTX™ 4060 VENTUS 2X OC 8GB GDDR6 128-bit Graphics Card</h3>
                    </div>
                </a>
                <a href="GPU/item7.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 2.png" alt="Product 7">
                        <h3>ASUS TUF Gaming GeForce RTX™ 3060 OC V2 12GB GDDR6 (LHR) Graphics Card</h3>
                    </div>
                </a>
                <a href="GPU/item8.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 3.png" alt="Product 8">
                        <h3>GIGABYTE GeForce RTX™ 4070 SUPER AERO OC 12G - Graphics Card</h3>
                    </div>
                </a>
                <a href="GPU/item9.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 4.png" alt="Product 9">
                        <h3>GIGABYTE GeForce RTX™ 4070 SUPER AERO OC 12G - Graphics Card</h3>
                    </div>
                </a>
                <a href="GPU/item9.html" class="linkage">
                    <div class="product-item">
                        <img src="images/GPU 5.png" alt="Product 10">
                        <h3>GIGABYTE GeForce RTX™ 4080 SUPER GAMING OC 16GB GDDR6X 256-bit Graphics Card</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="monitor">
            <h2>Monitors</h2>
            <div class="product-list">
                <a href="MONITOR/item11.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 1.png" alt="Product 11">
                        <h3>ROG Swift OLED PG49WCD 43"</h3>
                    </div>
                </a>
                <a href="MONITOR/item12.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 2.png" alt="Product 12">
                        <h3>ACER Predator X27U 27"</h3>
                    </div>
                </a>
                <a href="MONITOR/item13.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 3.png" alt="Product 13">
                        <h3>AOC 27G2S 27"</h3>
                    </div>
                </a>
                <a href="MONITOR/item14.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 4.png" alt="Product 14">
                        <h3>SAMSUNG Odyssey G32A 24"</h3>
                    </div>
                </a>
                <a href="MONITOR/item15.html" class="linkage">
                    <div class="product-item">
                        <img src="images/monitor 5.png" alt="Product 15">
                        <h3>LG 27MP60G-B 24"</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="mouse">
            <h2>Mouse</h2>
            <div class="product-list">
                <a href="MOUSE/item16.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 1.png" alt="Product 16">
                        <h3>Steel Series Aerox 9 Wireless Mouse</h3>
                    </div>
                </a>
                <a href="MOUSE/item17.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 2.png" alt="Product 17">
                        <h3>RAZER Viper V2 Pro Esports</h3>
                    </div>
                </a>
                <a href="MOUSE/item18.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 3.png" alt="Product 18">
                        <h3>Logitech M220 Silent Wireless Mouse 2.4GHz</h3>
                    </div>
                </a>
                <a href="MOUSE/item19.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 4.png" alt="Product 19">
                        <h3>Dell WM126 Wireless Mouse</h3>
                    </div>
                </a>
                <a href="MOUSE/item20.html" class="linkage">
                    <div class="product-item">
                        <img src="images/mouse 5.png" alt="Product 20">
                        <h3>SteelSeries Rival 3 Gaming Wireless Mouse</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="keyboard">
            <h2>Keyboards</h2>
            <div class="product-list">
                <a href="KEYBOARD/item21.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 1.png" alt="Product 21">
                        <h3>Razer BlackWidow V4 Pro</h3>
                    </div>
                </a>
                <a href="KEYBOARD/item22.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 2.png" alt="Product 22">
                        <h3>Logitech G915 Lightspeed TKL</h3>
                    </div>
                </a>
                <a href="KEYBOARD/item23.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 3.png" alt="Product 23">
                        <h3>Lemokey L3</h3>
                    </div>
                </a>
                <a href="KEYBOARD/item24.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 4.png" alt="Product 24">
                        <h3>Keychron Q5 Max</h3>
                    </div>
                </a>
                <a href="KEYBOARD/item25.html" class="linkage">
                    <div class="product-item">
                        <img src="images/kb 5.png" alt="Product 25">
                        <h3>NuPhy Air75 V2</h3>
                    </div>
                </a>
            </div>
        </section>
        <section class="upd">
            <h2>More to be added soon...</h2>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 PixelPulse Tech. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
