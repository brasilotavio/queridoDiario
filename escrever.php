<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrever</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logos/queridodiario-branca" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
    <br><br>
    
    <h1>
        Comece escrevendo o dia e a hora:
    </h1>

    <h1 class="data">

    </h1>

    <br>

    <form action="terminou.php" method="POST">
        <textarea name="escrita" id="" cols="90" rows="20" class="centralizar"></textarea> <br>
        <input type="submit" value="Terminei" class="botaoGenerico centralizar" onclick="feito()">
    </form>



    <script src="script.js"></script>
</body>
</html>