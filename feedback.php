<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback</title>

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
                    <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
                    <a href="profile.php" class="fas fa-user" ></a>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>

                <div class="profile">
                    <p class="name">jhon</p>
                    <div class="flex">
                        <a href="profile.html" class="btn">profile</a>
                        <a href="#" class="delete-btn">logout</a>
                    </div>
                    <p class="account"><a href="login.html">login</a> or <a href="register.html">register</a></p>
                </div>

            </section>

        </header>
        <!----header section end-->
        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family:  Arial,Verdana, sans-serif;
                background-color: white;
                margin: 0;
                font-size: 15px;

            }

            .container {
                max-width: 600px;
                margin: 100px auto;
                padding: 70px;
                background-color: #66ffc2;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 20px; 
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            select, input[type="text"], input[type="email"], textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #FFFF00;
                border-radius: 10px;
                font-size: 16px;
            }

            textarea {
                height: 150px;
            }

            button[type="submit"] {
                background-color: #006400;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                display: block; /* Make the button a block-level element */
                margin: 0 auto; /* Center the button horizontally */
            }

            button[type="submit"]:hover {
                background-color: #008000;
            }

            /* Style the feedback type dropdown */
            #feedback-type {
                font-size: 16px;
                padding: 15px;

            }

            /* Style for positive feedback option */
            #feedback-type option[value="positive"] {
                background-color: #dff0d8; /* Green background for positive feedback */

            }

            /* Style for negative feedback option */
            #feedback-type option[value="negative"] {
                background-color: #f2dede; /* Red background for negative feedback */
            }
            /* Style for the phone number input field */
            input[type="tel"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #FFFF00;
                border-radius: 10px;
                font-size: 16px;
            }

            /* Additional styles for the phone number input */
            input[type="tel"]:focus {
                border-color: #007bff;
            }

        </style>
    </head>
<body>
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="submit.php" method="post">
            <div class="form-group">
                <label for="feedbacktype">Feedback Type:</label>
                <select name="feedbacktype" id="feedback-type" required>
                    <option value="positive">Positive Feedback</option>
                    <option value="negative">Negative Feedback</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
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
