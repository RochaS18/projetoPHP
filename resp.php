<?php 

session_start();

$_SESSION["nome_b"]= $_POST["nome_b"];
$_SESSION["idade_b"]= $_POST["idade_b"];
$_SESSION["peso_b"]= $_POST["peso_b"];
$_SESSION["altura_b"]= $_POST["altura_b"]; 


echo $_SESSION['nome_a'];





 ?>