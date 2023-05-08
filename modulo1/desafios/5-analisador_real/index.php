<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Analisador</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Analisador de números reais</h1>
            <h2>Digite um número para saber se ele é real ou não</h2>

            <?php
                $number = $_POST["number"];
                $button = $_POST ["button"];
            ?>

            <form action="<?=$server["PHP_SELF"]?>" method="post">
                <input type="text" name="number" value="<?=$number?>" step="0.001">
                <br>
                <input type="submit" name="button" value="Continuar">
            </form>

            <?php
                $number = (double) $number;
                if (isset($button))
                {
                    if ($number == null or $number == is_string($number))
                    {
                        echo "<h2>Por favor, digite um número.</h2>";
                    }
                    else
                    {
                        $integer = (int) $number;
                        $fractional = $number - $integer;
                        echo "<h2><ul>";
                        echo "<li> O número é ". number_format($number, 3, ",", ".") ."</li>";
                        echo "<li> A parte inteira é ". number_format($integer, 0, ",", ".") ."</li>";
                        echo "<li> A parte fracionária é ". number_format($fractional, 3, ",", ".") ."</li>";
                        echo "</h2></ul>";
                    }
                }
            ?>
        </div>
    </div>


</body>
</html>
