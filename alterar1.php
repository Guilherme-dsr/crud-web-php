<?php
include_once("conexao.php");

$id = $_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$instrucao="UPDATE clientes SET nome = '$nome', email = '$email', tel = '$tel' WHERE id = '$id '" ;

mysqli_query($conn, $instrucao);
header("location: listar.php");

?>