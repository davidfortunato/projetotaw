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
    <?php include('register.php');
        include ('autentica.php');
        ?>

</head>

<header>
<?php
    if (!@isset($_SESSION['username'])) {
        header("Location: Login.php");
        exit();
    }

    if (!@isset($_SESSION['id'])) {
        $id_user= $_SESSION['id'];
    }
?>


</header>

<body>



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

    <form style="margin-left: 250px; margin-top: 150px">
        <h1>Exercise List</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Exercise</th>
                <th>Date</th>
                <th>Done</th>
                <th>In Course</th>
                <th>Planned</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                $query = "SELECT * from exercise_list ORDER BY date DESC LIMIT 10 WHERE users.id = exercise_list.id_user";

                $result = mysqli_query($con, $query);

                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Exercises'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><input type="radio" name="status" value="done"></td>
                <td><input type="radio" name="status" value="in Course"></td>   
                <td><input type="radio" name="status" value="planned"></td> 

            </tr>
            <?php
                }
            ?>
        </table>
    </form>

    <form style="margin-right: 250px; margin-top: 150px">
        
        <h1>Personal Information</h1>
        <table>

            <tr>
                <th>Weight</th>
                <th>Height</th>
                <th>IMC</th>
                <th>Date</th>
            </tr>

            <?php


                // LOOP TILL END OF DATA
                $query = " select *from imc ORDER BY id DESC LIMIT 1;";

                $result = mysqli_query($con, $query);


                while($rows=$result->fetch_assoc())
                {
                            
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['weight'];?></td>
                <td><?php echo $rows['height'];?></td>
                <td><?php echo $rows['imc'];?></td>
                <td><?php echo $rows['date'];?></td>

            </tr>
            <?php
                }
            ?>

        </table>



    </form>            

    
