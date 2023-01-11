<?php
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$verificar = "SELECT * FROM queridodiario WHERE email='$email' and senha='$senha'";
$resposta = $conn->query($verificar);

if($resposta->num_rows > 0) {
    while ($row = $resposta->fetch_assoc()) {
        $nome = $row['nome'];
        $id = $row['id'];
    }

    setcookie("nome", $nome, time()+3600);
    setcookie("email", $email, time()+3600);
    setcookie("senha", $senha, time()+3600);
    setcookie("id", $id, time()+3600);

    header("location: usuario.php");
}

else {
    header("location: erroLogin.php");
}

?>