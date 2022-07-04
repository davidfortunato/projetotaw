<?php

$link = mysqli_connect('localhost', 'root', '', 'taw') or die("N�o ligou");

session_start(); 

if (@$_REQUEST['logout']) {
	logout();
}


if (@$_POST['username'] && @$_POST['password']){

	$username= mysqli_real_escape_string($link, $_POST['username']);
	$password= md5($_POST['password']);

	$sql="SELECT id FROM users WHERE password='$password' AND username='$username'";
	$result = mysqli_query($link, $sql);
	$num = mysqli_num_rows($result);

	if ($num<1) {
		form_login();
		exit; // depois de apesentar o formulario nao apresenta mais nada;
	} else {
		$_SESSION['username'] = $username;  // guarda em sessao
	}
	
} else if (!@isset($_SESSION['username'])) { // nao vem do form 
	form_login();
	exit;   // depois de apresentar o formulario nao apresenta mais nada
}


function form_login(){
	header("Location: Login.php");
}


function logout(){
	//session_destroy();
	
    session_destroy();
    
}
?>
