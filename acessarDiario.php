<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="esqueletoRolagem">
    <div class="centralizar">
        <?php 
            $id = $_COOKIE["id"];

            $diario = "diarios/" . $id . ".txt"; 
        

            if (file_exists($diario)) {
                $arquivo = fopen($diario, "r");
                ?>
                <br><br>
                <h1>
                Aqui está seu Diário:
                </h1>
            <?php

                echo "<br>";

            while(!feof($arquivo)) {
            $linha = fgets($arquivo);
            echo $linha . "<br>";
            }

            fclose($arquivo);
            }

            else {
                ?>
                    <p>Você precisa, primeiro, escrever alguma coisa nele.</p>
                <?php
            }
        
        ?>
    </div>
</body>
</html>