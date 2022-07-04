<?php 

include('register.php'); //conection to the database
session_start();
$message1='';
$message2='';

if(isset($_POST["login"]))
{
 $username = $_POST['username'];
 $query = " SELECT * FROM users WHERE username = '$username' ";
 $statement = mysqli_query($con, $query);

  $count = mysqli_num_rows($statement);
  echo $count;
  if($count > 0)
 {
  $result =mysqli_fetch_assoc($statement);


      if($_POST['password'] == $result['password'])
      {
        $_SESSION['loggedIn'] = TRUE;
        $_SESSION['id'] = $result['id'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['email'] = $result['email'];
        $id= $result['id'];
        $users= mysqli_query($con, "SELECT username FROM users WHERE id = '$id'");
        $_SESSION['users'] = $users;
              
        echo("Youre logged in");
        echo($_SESSION['username']);
        header("location:index.php");

        
      }
      else
      {
        $message2 = "The password is invalid";
      }
  
 }
 else {
  $message1 = "The email is invalid";
 }
}

?>

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


</head>

<body>
    <div class="wrapper">
    <div class="sidebar">
        <h2><img src="logo.png" alt="logo" class="logo"></h2>


    </div>
    <form method="post">
        <div class="imgcontainer">
            <img src="avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <input class="w-100 btn btn-lg btn-primary" style="background-color:red;border-color:red; color:white" type="submit" value="Login" name ="login" id ="login" ></input>

        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="registerbtn"><a href="register_main.php">Register</a></button>
        </div>
    </form>

</div>
</body>

</html>