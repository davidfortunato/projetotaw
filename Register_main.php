<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
    <?php include 'register.php';?>
    
</head>

<body>

<?php
    require('register.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $firstName = stripslashes($_REQUEST['firstName']);
        $firstName = mysqli_real_escape_string($con, $firstName);
        $lastName = stripslashes($_REQUEST['lastName']);
        $lastName = mysqli_real_escape_string($con, $lastName);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, email, firstName, lastName, password)
                     VALUES ('$username', '$email', '$firstName', '$lastName', '$password')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    }
        ?>



    <div class="wrapper">
        <div class="sidebar">
            <h2><img src="logo.png" alt="logo" class="logo"></h2>
            <ul>

                <li><a href="Login.php"><i class="fa-solid fa-list" id="drop2"></i>Login</a></li>

            </ul>

        </div>
        <form method="post" id="register">
            <div class="imgcontainer">
                <img src="avatar.png" alt="Avatar" class="avatar">
            </div>

            <form class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" class="input-field" placeholder="Enter Username" name="username" >

                <label for="email"><b>Email</b></label>
                <input type="email" class="input-field" placeholder="Enter your email" name="email"> <br>

                <label for="firstName"><b>First Name</b></label>
                <input type="text" class="input-field" placeholder="Enter your first name" name="firstName">

                <label for="lastName"><b>Last Name</b></label>
                <input type="text" class="input-field" placeholder="Enter your last name" name="lastName">

                <label for="password"><b>Password</b></label>
                <input type="password" class="input-field" placeholder="Enter Password" name="password">

                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </div>

</body>

</html>