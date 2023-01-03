<?php 
    include("conexao.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


$inserir = "INSERT INTO queridodiario ( nome, email, senha ) VALUES ('$nome', '$email', '$senha') ";

if ($conn->query($inserir) === TRUE ) {
    $verificar = "SELECT * FROM queridodiario WHERE email='$email' and senha='$senha'";
$resposta = $conn->query($verificar);

    if ($resposta->num_rows > 0) {
        while ($row = $resposta->fetch_assoc()) {
            $id = $row['id'];
        }
    }


    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['id'] = $id;

    header("location: usuario.php");

    } 
    
    
    else {
        header("location: erroConexao.php");
    }


?>