<?php 

session_start();

$_SESSION["nome_b"]= $_POST["nome_b"];
$_SESSION["idade_b"]= $_POST["idade_b"];
$_SESSION["peso_b"]= $_POST["peso_b"];
$_SESSION["altura_b"]= $_POST["altura_b"]; 





//altura

if ($_SESSION['altura_b']> $_SESSION['altura_a']) {
	echo("Quem tem a maior altura: "  . $_SESSION['nome_b' ]  . "<br>". $_SESSION['altura_b'] . "<br><br>");



}
else {


echo("Quem tem a altura maior:" .  $_SESSION['nome_a'] . "<br>" . "Altura: " . $_SESSION['altura_a'] . "<br><br>");

}


//idade

if ($_SESSION['idade_b']> $_SESSION['idade_a']) {
	echo("Quem tem a idade maior:" . $_SESSION['nome_b' ] . "<br>" ."Idade:" . $_SESSION['idade_b'] . "<br><br>" );

}
else {


echo("Quem tem a maior idade:" .  $_SESSION['nome_a']  . "<br>" . "Idade:" . $_SESSION['idade_a'] . "<br><br>");

}


//peso



if ($_SESSION['peso_b']> $_SESSION['peso_a']) {
	echo("Quem tem o peso maior: " . $_SESSION['nome_b' ] . "<br>" ."Peso:" . $_SESSION['peso_b']. "<br><br>");

}
else {


echo("Quem tem a altura maior:" .  $_SESSION['nome_a'] . "<br>"  . "Peso: " . $_SESSION['peso_a']. "<br><br>");

}





 ?>