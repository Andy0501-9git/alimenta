<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit</title>
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
            /* Style for the success message */
            .success-message {
                background-color: #4CAF50; 
                color: #fff; 
                padding: 20px; 
                text-align: center; 
                font-size: 20px; 
                margin-top: 20px; 
                border-radius: 4px;
 

            }
        </style>
    </head>
<body>
    <?php
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $feedbackType = $_POST["feedbacktype"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phone"];
        $message = $_POST["message"];

        // Database connection settings
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "alimenta";

        // Create a database connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check if the connection is successful
        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL query to insert data into the 'feedback' table
        $sql = "INSERT INTO feedback (feedbacktype, name, email, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $feedbackType, $name, $email, $message);
            if ($stmt->execute()) {
                // Display the success message with styling
                echo '<div class="success-message">Thank you! Your feedback has been successfully submitted.</div>';
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing SQL statement: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
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
