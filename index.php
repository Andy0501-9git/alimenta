<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: home.html");
    die();
}

include('config.php');
$msg = "";
$Error_Pass = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conx, $_POST['email']);
    $Pass = mysqli_real_escape_string($conx, md5($_POST['Password']));
    $sql = "SELECT * FROM user WHERE email='{$email}' and Password='{$Pass}'";
    $resulte = mysqli_query($conx, $sql);

    if (mysqli_num_rows($resulte) === 1) {
        $row = mysqli_fetch_assoc($resulte);
        $_SESSION['Email_Session'] = $email;
        header("Location: home.html");
    } else {
        $msg = "<div class='alert alert-danger'>Email or Password is not correct.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <style>
        .alert {
            padding: 1rem;
            border-radius: 5px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            width: 65%;
        }

        .alert-success {
            background-color: #42ba96;
        }

        .alert-danger {
            background-color: #fc5555;
        }

        .alert-info {
            background-color: #2E9AFE;
        }

        .alert-warning {
            background-color: #ff9966;
        }

        .Forget-Pass {
            display: flex;
            width: 65%;
        }

        .Forget {
            color: #2E9AFE;
            font-weight: 500;
            text-decoration: none;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <?php echo $msg ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" />
                    </div>
                    <div class="Forget-Pass">
                        <a href="Forget.php" class="Forget">Forgot Password ?</a>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn solid" />
                   
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Don't have an account?</h3>
                    <p>
                        sign up here
                    </p>
                    <a href="SignUp.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
                        Sign up
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>
