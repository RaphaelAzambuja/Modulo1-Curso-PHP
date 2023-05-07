<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>PHP</title>
</head>
<body>
    <main>    
        <h1>Exemplo de PHP</h1>
        <?php 
        // Tem como setar um timezone padrão com os seguintes comandos  

        date_default_timezone_get();                    //esse comando puxa a local
        date_default_timezone_set("America/Sao_Paulo"); // esse comando seta São Paulo como padrão

        echo "Hoje é dia ".date("d/m/Y")." e a hora atual é ".date("G:i:s T");
        ?>
    </main>
</body>
</html>