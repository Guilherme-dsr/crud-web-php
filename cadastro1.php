<?php 
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$end = $_POST['end'];

$result_usuario = "INSERT INTO cadastros VALUES ( 0, '$nome','$email','$end')";
$resutado_usuario = mysqli_query($conn, $result_usuario);

header("Location: ../index.php");
 ?>