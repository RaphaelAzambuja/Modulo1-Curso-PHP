<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Analisador</title>
</head>
<body> 
    <main>
        <?php 
            $number = (double) $_POST["number"] ?? null; 

            if ($number == null) 
            {
                echo "<h2>Por favor, digite um número.</h2>";  
            }
            else
            {
                $integer = (int) $number;
                $fractional = $number - $integer;
                echo "<h2><ul><li> O número é ". number_format($number, 3, ",", ".") ."</li>";
                echo "<li> A parte inteira é ". number_format($integer, 0, ",", ".") ."</li>";
                echo "<li> A parte fracionária é ". number_format($fractional, 3, ",", ".") ."</li></ul></h2>";
            }
        ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>




