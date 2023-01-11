<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="esqueleto">


    <img src="logos/diana.png" alt="diana" class="dianaLogin"> 

        <div class="apresentacaoLogin">
            <div class="row">
            <form action="insercao.php" method="POST">
            <br> <p class="centralizar">Seu nome?</p> 
            <input type="text" name="nome" required class="inputPadrao"> <br>
            <br> <p class="centralizar">Seu email?</p> 
            <input type="email" name="email" required class="inputPadrao"> <br>
            <br> <p class="centralizar">Sua senha?</p> 
            <input type="password" name="senha" required class="inputPadrao"> <br><br><br>
        <input type="submit" class="botaoGenerico centralizar" value="Pronto">

</form>
            </div>
        </div>
   
</body>
</html>