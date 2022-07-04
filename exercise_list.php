<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <?php include 'button.php';?>
</head>

<style>
    #chest {
        font-size: 40px;
        margin-left: 220px;
        margin-top: 150px;
        width: 80%;
        height: 60px;

    }

    #legs,
    #arms,
    #back {
        width: 80%;
        height: 60px;
        font-size: 40px;
        margin-left: 220px;
        margin-top: 150px;
    }

    #list {
        font-size: 25px;
        margin-right: 240px;
        width: 80%;
        height: 50px;
        display: inline-block;
        vertical-align: left;
    }

    #list_exercises input {
        height: 10px;
        width: 40px;
        float: right;
        font-size: 10px;
        line-height: 0px;
        padding: 10px;
        color: white;
        background-color: #594f8d;

    }

    form{
        width: 100%;
        height: 100%;
        margin-top: 150px;
        margin-left: 220px;
    }

</style>


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

        <form method="post" id="list_exercises">
            <section id="chest">
                <p>CHEST:</p>

                <ol class="list-group list-group-numbered" id="list">
                    <li class="list-group-item">Bench Press
                        <input type="submit" name='bench_press' value="ADD"></input>
                    </li>
                    <li class="list-group-item">Push Ups
                        <input type="submit" name="push_ups" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Deeps
                        <input type="submit" name="deeps" value="ADD"></input>
                    </li>
                </ol>
            </section>
            <br>
            <br>

            <section id="back">
                <p>BACK:</p>
                <ol class="list-group list-group-numbered" id="list">
                    <li class="list-group-item">Deadlift
                        <input type="submit" name="deadlift" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Pull Ups
                        <input type="submit" name="pull_ups" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Lat Pulldown
                        <input type="submit" name="lat_pulldown" value="ADD"></input>
                    </li>
                </ol>
            </section>
            <br>
            <br>

            <section id="arms">
                <p>ARMS:</p>
                <ol class="list-group list-group-numbered" id="list">
                    <li class="list-group-item">Overhead Extensions
                        <input type="submit" name="overhead_extensions" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Bicep Curls
                        <input type="submit" name="bicep_curls" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Tricep Push Ups
                        <input type="submit" name="tricep_push_ups" value="ADD"></input>
                    </li>
                </ol>
            </section>
            <br>
            <br>

            <section id="legs">
                <p>LEGS:</p>
                <ol class="list-group list-group-numbered" id="list">
                    <li class="list-group-item">Leg Press
                        <input type="submit" name="leg_press" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Squat
                        <input type="submit" name="squat" value="ADD"></input>
                    </li>
                    <li class="list-group-item">Lunges
                        <input type="submit" name="lunges" value="ADD"></input>
                    </li>
                </ol>
            </section>

        </div>