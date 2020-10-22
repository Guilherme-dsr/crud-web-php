<?php 
include_once("conexao.php");
//$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);

session_start();
$username = $_SESSION['nome'];
$result =  "SELECT * FROM clientes WHERE username = '$username'";
$resultado = mysqli_query($conn, $result);
$linha = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="alterar.php">
		<label>
			<input type="hidden" name="id"  value="<?php echo $linha['id']  ?>">
			<p>Nome:<input type="text"name="nome" required="required" value="<?php echo $linha['nome']  ?>"> </p>
			<p>Email: <input type="text"name="email" required="required"  value="<?php echo $linha['email'] ?>"></p>
			<p>Endereço:<input type="text" name="end" required="required"  value="<?php echo $linha['endereco']  ?>"></p>

			<input type="submit" name="enviar" value="EDITAR">
			
		</label>
	</form>

</body>
</html>
