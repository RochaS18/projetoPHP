<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Formulario A</title>

</head>

<body>

<form action="formulario_B.php" method="post">

			<label>Nome:</label>
			<input type="text" name="nome" autocomplete="off" required maxlength="30"><br><br>

			<label>Idade:</label>
			<input type="number" name="idade" autocomplete="off" required maxlength="3"><br><br>
			
			<label>Peso:</label>
			<input type="number" name="peso" autocomplete="off" required maxlength="3"><br><br>
			
			<label>Altura:</label>
			<input type="number" name="altura" autocomplete="off" required maxlength="3"><br><br>

			<input type="submit" name="enviar" value="Enviar">


			

			
			

</form>


</body>
</html>