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


    setcookie("nome", $nome, time()+3600);
    setcookie("email", $email, time()+3600);
    setcookie("senha", $senha, time()+3600);
    setcookie("id", $id, time()+3600);

    header("location: usuario.php");

    } 
    
    
    else {
        header("location: erroConexao.php");
    }


?>