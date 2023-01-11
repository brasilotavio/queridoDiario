<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronto!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php
    $escrita = $_POST['escrita'];

    $id = $_COOKIE["id"];

    $diario = "diarios/" . $id . ".txt"; 

    $arquivo = fopen($diario, "a"); //variavel pra indicar o diario de um usuario

    fwrite($arquivo, $escrita);
    fwrite($arquivo, "\n");
    fwrite($arquivo, "--------------------------------------------------------------------------");
    fwrite($arquivo, "\n");

    fclose($arquivo);

    //header("location: usuario.php");
    ?>


    <br><br><br>
    
        <div class="centralizar">
        <a href="usuario.php" class="noDecoration">
            <button class="botaoGenerico centralizar">
                Voltar
            </button>
        </a>
    </div>



</body>
</html>