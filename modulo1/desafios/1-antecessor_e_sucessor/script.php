<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Sucede e antecede :)</title>
</head>
<body> 
    <main>
        <?php 
            $number = (int) $_POST["number"] ?? null; 
            
            if ($number == null) 
            {
                echo "<h2>Por favor, digite um número.</h2>";  
            }
            else
            {
                echo "<h2>O antecessor de $number é ". $number - 1 ." e seu sucessor é ". $number + 1 ."</h2>";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>




