<?php
$usuario = 'root';
$senha = '';
$database = 'meu banco';
$host = 'localhost';
$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->error) {
 die("Falha ao conectar: " . $mysqli->error);
} //else {
 // echo "Conexão com o banco realizada com sucesso!";
//}
//OS COMENTÁRIOS ACIMA EXIBE A MSG DA CONEXAO COM O BANCO
?>
