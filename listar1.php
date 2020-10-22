<?php

include_once("conexao.php");
$select = "SELECT * FROM cadastros ";
$var = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="../index.php">INDEX</a>
	<table border="1" align="center">
		
		<tr>
			<td>ID:</td>
			<td>Nome:</td>
			<td>Email:</td>
			<td>Endereço:</td>
		</tr>
		<?php  while($dado = $var -> fetch_array()) { ?>
		<tr>
			<td> <?php echo $dado['id']; ?></td>
			<td> <?php echo $dado['nome'] ?> </td>
			<td> <?php echo $dado['email'] ?> </td>
			<td> <?php echo $dado['endereco'] ?> </td>

			<td><a href="edit.php?id=<?php echo $dado["id"]; ?>"> Editar</a></td>
			<td><a href="delete.php?id=<?php echo $dado["id"]; ?>"> Deletar</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>