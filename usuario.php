<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Usuário</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="esqueletoRolagem">
    <?php 
    
    $nome = $_COOKIE["nome"];

    ?>

    
    
    <!--<img src="../logos/alegre.png" alt="" class="centralizar" width="10%" height="10%">-->

    <div class="apresentacaoUsuario">
        <div class="row">
        <h1>
        Olá, <?php echo " " . $nome . "!"?>
        </h1>

        </div>
    </div>



    <?php

    //$conselho = "";
        
        //$resultado = file_get_contents("https://api.adviceslip.com/advice");
        //$json = json_decode($resultado);
        //$conselho = $json->advice; 

        //echo $conselho;
        //echo $resultado;
        

    ?>

<br><br><br><br>


    <h4>Escrever nova página</h4>

  <a href="escrever.php">
      <div class="botaoEscrever centralizar">
      </div>
  </a>

  <br><br>

  <h4>Acessar meu Diário</h4>

  <a href="acessarDiario.php">
      <div class="botaoAcessar centralizar">
      </div>
  </a>

  <br><br>

  <h4>Limpar Diário</h4>

  <a href="confirmar.php">
      <div class="botaoLimpar centralizar">
      </div>
  </a>

  <br><br><br><br>

  <a href="index.html" class="noDecoration">
      <button class="botaoGenerico centralizar">
            Sair
        </button>
  </a>

  <br><br>

    <script src="script.js"></script>
</body>
</html>