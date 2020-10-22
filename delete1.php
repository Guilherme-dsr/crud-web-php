<?php 
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
$del =  "DELETE FROM clientes WHERE id = '$id'";
$resultado = mysqli_query($conn, $del);

header("location: listar.php");
?>