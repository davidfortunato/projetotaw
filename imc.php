<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="script.js"></script>
    <?php include('register.php');?>

</head>

<body>

<?php
    require('register.php');
    include ('autentica.php');

    if (isset($_REQUEST['weight'])) {
        $weight = stripslashes($_REQUEST['weight']);
        $weight = mysqli_real_escape_string($con, $weight);
        $height = stripslashes($_REQUEST['height']);
        $height = mysqli_real_escape_string($con, $height);
        $imc = stripslashes($_REQUEST['imc']);
        $imc = mysqli_real_escape_string($con, $imc);
        $query2 = "SELECT id, ROUND(weight / POWER(height / 100, 2), 3) as imc
        FROM imc;";

        $query    = "INSERT into `imc` (weight, height, imc)
                     VALUES ('$weight', '$height', '$imc')";
        $result   = mysqli_query($con, $query);
    }

?>

    <div class="wrapper">
    <div class="sidebar">
        <h2><img src="logo.png" alt="logo" class="logo"></h2>
        <ul>
        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="exercise_list.php"><i class="fas fa-user"></i>Exercise List</a></li>
                <li><a href="imc.php"><i class="fa-solid fa-list"></i>Update your Information</a></li>


                <li><a href="login.php"><i class="fa-solid fa-list" id="drop2" oncllick="logout()"></i>Logout</a></li>
        </ul>

    </div>

        <form method="post" id="register">
            <div class="imgcontainer">
                <img src="avatar.png" alt="Avatar" class="avatar">
            </div>

            <form class="container">
                <label for="username"><b>Weight</b></label>
                <input type="text" class="input-field" placeholder="Enter your Weight" name="weight" >

                <label for="text"><b>Height</b></label>
                <input type="text" class="input-field" placeholder="Enter your email" name="height"> <br>

                <button type="submit" name="register">Add Info</button>
            </form>
    </div>