<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('conexao.php');
$mysqli = $mysqli ?? $conexao ?? $conn ?? null;
if (!$mysqli) {
    die('Erro de conexão com o banco de dados.');
}
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $acao = $_POST['acao'] ?? '';
 if (empty($_POST['email'])) {
 $msg = "Por favor preencha seu e-mail";
 } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 $msg = "Digite um e-mail válido";
 } elseif (empty($_POST['senha'])) {
 $msg = "Por favor preencha sua senha";
 } else {
 $email = $mysqli->real_escape_string($_POST['email']);
 if ($acao == 'cadastrar') {
 $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
 // Verifica se já existe
 $sql_check = "SELECT id FROM usuário WHERE email = '$email'";
 $result = $mysqli->query($sql_check);
 if (!$result) {
 $msg = "Erro SQL: " . $mysqli->error;
 } elseif ($result->num_rows > 0) {
 $msg = "Usuário já cadastrado!";
 } else {
 $sql = "INSERT INTO usuário (email, senha) VALUES ('$email', '$senha')";
 if ($mysqli->query($sql)) {
 $msg = "Usuário cadastrado com sucesso!";
 $_POST = [];
 } else {
 $msg = "Erro: " . $mysqli->error;
 }
 }
 }
 if ($acao == 'entrar') {
 $senha_digitada = trim($_POST['senha']);
 $sql = "SELECT * FROM usuário WHERE email = '$email'";
 $result = $mysqli->query($sql);
 if (!$result) {
 $msg = "Erro SQL: " . $mysqli->error;
 } elseif ($result->num_rows == 0) {
 $msg = "Usuário não encontrado!";
 } else {
 $usuario = $result->fetch_assoc();
 if (password_verify($senha_digitada, $usuario['senha'])) {
  $_SESSION['usuario_id']    = $usuario['id'];
                    $_SESSION['usuario_email'] = $usuario['email'];

                 
                    header("Location: http://localhost/TrabalhoFaculdade/index.php");
 exit;
 } else {
 $msg = "Senha incorreta!";
 }
 }
 }
 }
 }
?>
<!DOCTYPE html>
<html lang="pt-br">

   <head>
      <meta charset="UTF-8">
      <title>Login</title>
       <link rel="stylesheet" href="sistema de login.css">

    </head>
    
    <body>

         <main class="container">
 
         <form method="POST">
          

          <h1>Login</h1>

	 <div class="input-box">

            <input type="email" placeholder="usuario" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                <div class="icone">

	   <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/user.png" alt="user" />
                </div>
            </div>
	<div class="input-box">

            <input type="password" placeholder="senha" name="senha">
	    <div class="icone">
                    <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/lock--v1.png"
                        alt="lock--v1" />
                </div>
               </div>

          
          <p>
            <button type="submit" name="acao" value="entrar">Entrar</button>
            <button type="submit" name="acao" value="cadastrar">Cadastrar</button> 
          </p>

          <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($msg)): ?>

          <p style="color: <?= strpos($msg,' ') !== false ? 'green' : 'red' ?>">
            <?= $msg ?>
          </p>
            <?php endif; ?>

        </form>
	 </main>

    </body>

</html>