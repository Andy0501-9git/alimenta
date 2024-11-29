<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: welcome.php");
    die();
}
include('config.php');

$msg = "";
$registrationSuccess = false; // Initialize to false

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conx, $_POST['Username']);
    $email = mysqli_real_escape_string($conx, $_POST['Email']);
    $Password = mysqli_real_escape_string($conx, md5($_POST['Password']));
    $Confirm_Password = mysqli_real_escape_string($conx, md5($_POST['Conf-Password']));

    if (mysqli_num_rows(mysqli_query($conx, "SELECT * FROM user WHERE email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>This Email: '{$email}' has already existed.</div>";
    } else {
        if ($Password === $Confirm_Password) {
            $query = "INSERT INTO user(`Username`, `email`, `Password`) 
                      VALUES ('$name', '$email', '$Password')";
            $result = mysqli_query($conx, $query);

            if ($result) {
                $msg = "<div class='alert alert-info'>Registration successful. You can now log in.</div>";
                // Reset the form values
                $_POST['Username'] = "";
                $_POST['Email'] = "";
                $_POST['Password'] = "";
                $_POST['Conf-Password'] = "";
                $registrationSuccess = true; // Set to true when registration is successful
            } else {
                $msg = "<div class='alert alert-danger'>Something went wrong.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
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
    <title>Sign up Form</title>
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
        
        
        
   /*   .custom-select {
    position: relative;
}

.custom-select .select-wrapper {
    position: relative;
    cursor: pointer;
    width: 100%;
}

.custom-select .selected-option {
    background: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.custom-select .options {
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: none;
}

.custom-select .options li {
    padding: 10px;
    cursor: pointer;
}

.custom-select .options li:hover {
    background: #f0f0f0;
}
*/

    </style>
</head>
<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <?php echo $msg ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username" value="<?php echo isset($_POST['Username']) ? $_POST['Username'] : ''; ?>" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" value="<?php echo isset($_POST['Email']) ? $_POST['Email'] : ''; ?>" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf-Password" placeholder="Confirm Password" />
                    </div>
                        <!--<div class="input-field">
    <i class="fas fa-users"></i>
  <div>
    <label for="Role">Role</label>
    <select name="Role" id="Role">
         <option value="select role" name="select role"
        <option value="User" <?php //echo isset($_POST['Role']) && $_POST['Role'] === 'User' ? 'selected' : ''; ?>>User</option>
        <option value="Admin" <?php //echo isset($_POST['Role']) && $_POST['Role'] === 'Admin' ? 'selected' : ''; ?>>Admin</option>
    </select>
    </div>
</div>
           -->             
                        
                   
                    <input type="submit" name="submit" class="btn" value="Sign up" />
                    
                    <!-- Show the "Log in" link only if registration is successful -->
                    <?php if ($registrationSuccess): ?>
                    <p>Registration successful. <a href="index.php">Log in</a></p>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <!--<script>
    
    document.addEventListener('DOMContentLoaded', function () {
    const customSelects = document.querySelectorAll('.custom-select');

    customSelects.forEach(function (customSelect) {
        const selectWrapper = customSelect.querySelector('.select-wrapper');
        const selectedOption = customSelect.querySelector('.selected-option');
        const options = customSelect.querySelector('.options');
        const hiddenInput = customSelect.querySelector('input[type="hidden"]');

        selectWrapper.addEventListener('click', function () {
            options.style.display = options.style.display === 'block' ? 'none' : 'block';
        });

        options.querySelectorAll('li').forEach(function (option) {
            option.addEventListener('click', function () {
                selectedOption.textContent = option.textContent;
                hiddenInput.value = option.getAttribute('data-value');
                options.style.display = 'none';
            });
        });
    });
});
</script>-->
</body>
</html>
