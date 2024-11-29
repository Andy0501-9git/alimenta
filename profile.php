<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/footer.css">

        <link rel="icon" type="" sizes="96x96" href="images/Brown Simple Food Store Logo.png">

    </head>
    <body>
        <!----header section start-->  
        <header class="header">
            <section class="flex">

                <a href="home.html"><img src="images/lg.png" width="120" height="50" alt="Logo"></a>


                <nav class="navbar">
                    <a href="home.html">Home</a>
                    <a href="menu.html">Menu</a>
                    <a href="index.php">Login</a>
                    <a href="aboutus.html">About Us</a>
                    <a href="contact.html">Contact Us</a>
                </nav>

                <div class="icons">
                    <a href="search.html"><i class="fas fa-search"></i></a>
                    <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(0)</span></a>
                    <a href="profile.php" class="fas fa-user" ></a>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>

                <div class="profile">
                    <p class="name">Please login first!</p>
                    <div class="flex">
                        <a href="login.html" class="btn">Login</a>
                        <a href="register.html" class="btn">Register</a>
                    </div>

                </div>

            </section>

        </header>
        <!----header section end-->
        <style>
            /* Style the user-details section */
            .user-details {
                margin: 20px;
                padding: 20px;
                border: 1px solid #aaff80;
                border-radius: 20px;
                background-color:#66ffc2;
                width: 400px; 
                height: 500px; 
                align-items: center; 
                margin: 0 auto; 
                margin-top: 100px;
                font-family: "Verdana", sans-serif;
                box-shadow: 0px 0px 10px rgba(0, 128, 0, 0.3); 
                font-size: 20px;
            }

            /* Style the user information container */
            .user {
                text-align: center;
            }

            /* Style the user icon */
            .user img {
                width: 120px; 
                height: 120px; 
                border-radius: 50%;
                margin-top: 10px;
            }

            /* Style the user details */
            .user p {
                margin: 5px 0;
            }

            /* Style the font awesome icons */
            .user i {
                margin-right: 5px;
            }

            /* Style the update buttons */
            .user .btn {
                display: inline-block;
                margin-top: 10px;
                padding: 5px 10px;
                background-color: #009933;
                color: #fff;
                text-decoration: none;
                border: none;
                border-radius: 5px;
                font-family: "Verdana", sans-serif;
                margin-bottom: 20px;

            }

            .user .btn:hover {
                background-color: #33cc33;
            }

            /* Style the address */
            .user .address {
                margin-top: 10px;
            }




        </style>
    </head>
<body>

    <section class="user-details">

        <div class="user">
            <img src="images/user.png" alt="">
            <p><i class="fas fa-user"></i> <span>John Doe</span></p>
            <p><i class="fas fa-phone"></i> <span>0714567890</span></p>
            <p><i class="fas fa-envelope"></i> <span>johndoe@gmail.com</span></p>
            <a href="update_profile.html" class="btn">Update profile</a>
            <p class="address"><i class="fas fa-map-marker-alt"></i> <span>289/7 Main Street,Colombo 7,Sri Lanka</span></p>
            <a href="update.html" class="btn">Update address</a><br>
            <a href="orders.html" class="btn">My orders</a>
        </div>


    </section>

    <?php
    // put your code here
    ?>
    <!---footer section start--->
    <footer>
        <div class="footer-back">
            <div class="footer-wrap">
                <div class="footer-mar">
                    <div class="foo-width-1 footer-pad">
                        <div class="footer-text">

                            <div class="footer-logo">
                                <a href="home.html">
                                    <img src="images/lg.png" alt="">
                                </a>
                                <h1><u>Opening Hours</u></h1> 
                                <p class="hours">Monday-Sunday : 8.00am - 22.00pm</p>

                            </div>
                        </div>
                    </div>
                    <div class="foo-width-2 footer-pad">
                        <div class="footer-text">
                            <h1><u>Site Link</u></h1>
                            <a href="home.html"> Home</a>
                            <a href="menu.html"> Menu</a>
                            <a href="index.php"> Login</a>
                            <a href="aboutus.html"> About Us</a>
                            <a href="contact.html"> Contact Us</a>

                        </div>
                    </div>
                    <div class="foo-width-3 footer-pad">
                        <div class="footer-text">
                            <h1><u>Contact Us</u></h1>
                            <p class="address">10th Floor,<br>
                                Alimenta,<br>
                                Kandy,<br>
                                Sri Lanka.<br>
                                (+94) 72 1234567
                            </p>
                            <div class="media-icon">
                                <a href="https://www.facebook.com/profile.php?id=61550849227707&mibextid=ZbWKwL">
                                    <img src="images/facebook.png" alt="Facebook">
                                </a>

                                <a href="https://chat.whatsapp.com/G4W3lSstxEkH71rXqWxthq">
                                    <img src="images/whatsapp.png" alt="Whatsapp">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="footer-border">
                        <div class="footer-bottom">
                            <p>Copyright <i class="far fa-copyright"></i> 2023 <b>ALIMENTA.</b> All Rights Reserved.Designed By IIT Group 02. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

</body>
</html>
