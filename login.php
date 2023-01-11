<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body class="esqueleto">


    <img src="logos/feliz.png" alt="diana" class="dianaLogin"> 
        <div class="apresentacaoLogin">

            <div class="row">
            <form action="validacao.php" method="POST">
            <br> <p class="centralizar">Seu email?</p> 
            <input type="email" name="email" class="inputPadrao"> <br>
            <br> <p class="centralizar">Sua senha?</p> 
            <input type="password" name="senha" class="inputPadrao"> <br><br><br><br>
        <input type="submit" class="botaoGenerico centralizar" value="Entrar"> <br><br>
</form>
            <!--
            </div>
            
            <br>
            <a href="recuperar.php" class="noDecoration">
            <button class="botaoGenerico">
                Recuperar Senha
            </button>
            </a>

        </div>
        -->
   
</body>
</html>