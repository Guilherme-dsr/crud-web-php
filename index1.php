<!DOCTYPE html>
<html>
<head>
	<title>CURD</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>CRUD:</h1>
	<form action="php/cadastro.php" method="post">
		<p>Nome:</p>
		<p><input type="text" name="nome"></p>

		<p>Email:</p>
		<p><input type="email" name="email"></p>

		<p>Endereço:</p>
		<p><input type="text" name="end"></p>

		<input type="submit" name="Enviar">

	</form>
	</center>
<a href="php/listar.php">Listar</a>
</body>
</html>