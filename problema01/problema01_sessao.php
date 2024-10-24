<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão do form1</title>
<?php 	
      
session_start();


$_SESSION["n"]= $_POST["nome"];


$_SESSION["i"] = $_POST["idade"];


$_SESSION['p'] = $_POST['peso'];


$_SESSION['al'] = $_POST['altura'];


$_SESSION["n2"]= $_POST["nome02"];


$_SESSION["i2"] = $_POST["idade02"];


$_SESSION['p2'] = $_POST['peso02'];


$_SESSION['al2'] = $_POST['altura02'];

	// idade

	if($i > $i2){

		$m_velho = $_SESSION['i'];		

	} else{

		$m_velho = $_SESSION['i2'];
	}

// altura 

	if($al > $al2){

		$al_maior = $_SESSION['al'];		

	} else{

		$al_maior = $_SESSION['al2'];
	}


// PESO

	if($p > $p2){

		$p_maior = $_SESSION['p'];		

	} else{

		$p_maior = $_SESSION['p2'];
	}


	
	 ?>
</head>
<body>

</body>
</html>