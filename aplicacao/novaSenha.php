<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Recuperação de conta
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="esqueleto">

<?php
include("conexao.php");

$email = $_POST['email'];

$novaSenha = substr(md5(time()), 0, 6);
$nscriptografada = md5(md5($novaSenha));

$verificar = "SELECT * FROM queridodiario WHERE email='$email'";
$resposta = $conn->query($verificar);

if ($resposta->num_rows > 0) {

    $atualizar = "UPDATE queridodiario SET senha = '$nscriptografada' WHERE email = '$email'";

    if ($conn->query($atualizar) === TRUE) {
        mail($email, "Sua nova senha", "Sua nova senha: " . $novaSenha);
    }

    else {
        echo "Não foi possível enviar o email";
    }

}

else {
    header("location: erroLogin.php");
}
?>



<br><br>
<h1>
    Email enviado! Volte para a página de login.
</h1>

<a href="login.php" class="noDecoration">
    <button class="botaoGenerico">
        Voltar
    </button>
</a>
    
</body>
</html>