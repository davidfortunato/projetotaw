<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="style_exercise.css">
    <script src="funcoes.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <?php     include ('autentica.php');
    ?>
</head>

<body>

<div>

    <div class="wrapper">

        <div class="sidebar" style="visibility: visible">
    
            <h2><img src="0b9c2b20-0590-4f90-b910-2ece17de7fa1.jpg" alt="logo" class="logo"></h2>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="exercise_list.php"><i class="fas fa-user"></i>Exercise List</a></li>
                <li><a href="imc.php"><i class="fa-solid fa-list"></i>Update your Information</a></li>


                <li><a href="login.php"><i class="fa-solid fa-list" id="drop2" oncllick="logout()"></i>Logout</a></li>
            </ul>
    
        </div>
    
        <div class="main_content">

            <div class="header" id="myHeader">
                <h2>FITIMS</h2>
            </div>

            <div class="info">    
                <div class="btns">
                    <div class="myBTNS">
                        <button class = "btn getStarted">Get Started</button>
                        <button id= "moreInfo" class = "btn moreInfo" onclick="scroll()">More Information</button>
                    </div>
                </div>     
            </div>

            <div class = "siteInfo">
                
                <div class = "siteInfoBox1">
                    No nosso website, FITIMS, poderá saber o seu Indíce de Massa Corporal, saber a sua evolução a nível de peso
                    e a nível de exercícios realizados. Poderá escolher entre os múltiplos exercícios disponíveis e seguir os seus amigos
                    para ver como eles estão! Registre-se já!!
                </div>

            </div>

        </div>
    </div>

    <script>

        document.querySelector("#moreInfo").addEventListener("click", () => 
        {
            window.scrollTo(0,document.body.scrollHeight);
        })

    </script>

</div>

</body>
</html>