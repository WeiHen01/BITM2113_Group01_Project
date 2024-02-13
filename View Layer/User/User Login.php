<!--=====================================================
    Check the session and get variables from other page
=======================================================-->
<?php 

?>

<!--===============================================================
    User Login.php: Login page where user choose to login as user
===================================================================-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FavIcon on the browser tab-->
    <link rel="icon" type="image/x-icon"
        href="https://png.pngtree.com/template/20190313/ourmid/pngtree-school-and-education-logo-image_67823.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>BITM2113 | Student Login</title>
    <link rel="stylesheet" href="../../Style/CSS/User/User Login.css">
</head>

<style>
/* Optional: Additional styling for the input box */
.input-box {
    position: relative;
}

/* Optional: Styling for the eye icon */
.fa-eye {
    position: absolute;
    top: 50%;
    right: 30px;
    transform: translateY(-50%);
    cursor: pointer;
}

.btn:hover {
    background-color: transparent;
    color: white;
    border-color: #fff;
    outline-color: #fff;
    border-radius: 40px;
}
</style>


<body>
    <div class="wrapper">
        <form action="">
            <h1>Student Login </h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class="fa-regular fa-eye"></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">Remember me
                </label>
                <a href="#">Forgot password ?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div style="margin-bottom: 10px;"></div>
            <button class="btn-back" onclick="window.location.href='../../index.php'">Back</button>
            <div class="register-link">
                <p>Don't have an account? <a href="#">Register Here</a></p>
            </div>
        </form>
    </div>
</body>

</html>