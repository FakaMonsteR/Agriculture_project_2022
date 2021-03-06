<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Registration</title>
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/alumnireg.css">
    <link rel="stylesheet" href="css/cs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="demo.js"></script>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container">
        <div class="alumni-text">
            <h1>Alumni Registration</h1>
            <p>Register an account with few simple steps</p>
        </div>

        <?php
        // echo $msg; 
        ?>

        <div class="alumnireg">
            <div class="alumni-form card">
                <h2>Register your account here</h2>
                <form action="alumnireg1.php" id="formAll" method="post">
                    <div class="input-row">
                        <input type="text" name="fname" placeholder="Name" required>
                    </div>
                    <div class="input-row">
                        <input type="text" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-row">
                        <input type="password" name="pswd" id="pswd" placeholder="Password" required>
                        <input type="checkbox" name="passwordCheckbox" id="passwordCheckbox" onclick="Toggle()">
                    </div>
                    <!-- <div class="input-row">
                        <input type="password" name="rpswd" id="rpswd" placeholder="Repeat Password" required>
                    </div> -->
                    <div class="input-row">
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                    </div>
                </form>
                <div class="login-link">
                    <p>Already have an account?<a href="./alumnilogin.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="demo.js"></script>
    <script>
        $('button').click(function() {
            $('.alert').addClass("show");
            $('.alert').removeClass("hide");
            $('.alert').addClass("showAlert");
            setTimeout(function() {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            }, 5000);
        });
        $('.close-btn').click(function() {
            $('.alert').removeClass("show");
            $('.alert').addClass("hide");
        });
    </script>


</body>

</html>