<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Probrema B</title>


<?php 

session_start();

$_SESSION["nome_a"]= $_POST["nome"];
$_SESSION["idade_a"]= $_POST["idade"];
$_SESSION["peso_a"]= $_POST["peso"];
$_SESSION["altura_a"]= $_POST["altura"]; 

 ?>


</head>

<body>

		<form action="resp.php" method="post">

			<label>Nome:</label>
			<input type="text" name="nome_b" autocomplete="off" required maxlength="30"><br><br>

			<label>Idade:</label>
			<input type="number" name="idade_b" autocomplete="off" required maxlength="3"><br><br>
			
			<label>Peso:</label>
			<input type="number" name="peso_b" autocomplete="off" required maxlength="3"><br><br>
			
			<label>Altura:</label>
			<input type="number" name="altura_b" autocomplete="off" required maxlength="3"><br><br>

			<input type="submit" name="enviar" value="Enviar">

						

		</form>
	

</body>
</html>