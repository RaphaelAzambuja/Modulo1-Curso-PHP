<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    
    <title>Somador poggers</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Somar valores</h1>
            
            <?php 
                $number_one = $_POST["number_one"] ?? null;
                $number_two = $_POST["number_two"] ?? null;
                $button = $_POST["button"];
            ?>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="number_one">Valor1</label>
                <input type="text" name="number_one" value="<?= $number_one ?>">

                <label for="number_two">Valor2</label>
                <input type="text" name="number_two" value="<?= $number_two ?>">

                <input type="submit" name="button" value="Somar">
            </form>
            
            <?php
                $number_one = (int) $number_one;
                $number_two = (int) $number_two;
                
                if(isset($button))
                {
                    if ($number_one == null or $number_two == null or $number_one == is_string($number_one) or $number_two == is_string($number_two))
                    {
                        echo "<h2>Por favor, escreva dois números</h2>";
                    }
                    else
                    {
                        echo "<h2>Resultado da soma é</h2>";
                        echo "<h2>$number_one + $number_two</h2>";
                    }
                }                
            ?>
        </div>
    </div>
</body>
</html>