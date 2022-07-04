<?php

include('register.php');

session_start();


if(isset($_POST['bench_press'])){

    global $taw;

    $id_user = $_SESSION['id'];


    $sql = "INSERT INTO exercise_list (Exercises, id_user) VALUES ('bench_press', 'users.id')";

    $result = mysqli_query($con, $sql);


} 

if(isset($_POST['push_ups'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('push_ups')";

    $result = mysqli_query($con, $sql);

}

if(isset($_POST['deeps'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('deeps')";

    $result = mysqli_query($con, $sql);

}

if(isset($_POST['deadlift'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('deadlift')";

    $result = mysqli_query($con, $sql);

}

if(isset($_POST['pull_ups'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('pull_ups')";

    $result = mysqli_query($con, $sql);
  
} 

if(isset($_POST['lat_pulldown'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('lat_pulldown')";

    $result = mysqli_query($con, $sql);
  
}

if(isset($_POST['overhead_extensions'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('overhead_extensions')";

    $result = mysqli_query($con, $sql);
  
}

if(isset($_POST['bicep_curls'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('bicep_curls')";

    $result = mysqli_query($con, $sql);
  
} 

if(isset($_POST['tricep_push_ups'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('tricep_push_ups')";

    $result = mysqli_query($con, $sql);
  
} 

if(isset($_POST['leg_press'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('leg_press')";

    $result = mysqli_query($con, $sql);
  
} 

if(isset($_POST['squat'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('squat')";

    $result = mysqli_query($con, $sql);
  
} 

if(isset($_POST['lunges'])){

    global $taw;

    $sql = "INSERT INTO exercise_list (Exercises) VALUES ('lunges')";

    $result = mysqli_query($con, $sql);
  
} 


?>
