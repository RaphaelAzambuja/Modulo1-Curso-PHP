<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Médias</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Tirar médias simples e ponderada</h1>
            <br>

            <?php
                $value1 = $_POST["value1"];
                $weight1 = $_POST["weight1"];
                $value2 = $_POST["value2"];
                $weight2 = $_POST["weight2"];
                $button = $_POST["button"];
            ?>

            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="value1">1°Valor</label>
                <input type="text" name="value1" value="<?=$value1?>">

                <label for="weight1">1°Peso</label>
                <input type="text" name="weight1" value="<?=$weight1?>">

                <br>

                <label for="value2">2°Valor</label>
                <input type="text" name="value2" value="<?=$value2?>">

                <label for="weight2">2°Peso</label>
                <input type="text" name="weight2" value="<?=$weight2?>">

                <input type="submit" name="button" value="Continuar">
            </form>

            <?php

                if (isset($button))
                {
                    $arithmetic = ($value1 + $value2) / 2;
                    $weighted = ($value1 * $weight1 + $value2 * $weight2) / ($weight1 + $weight2);
                    echo"<h2><ul>";
                    echo"<li>A média aritmética simples é $arithmetic</li>";
                    echo"<li>A média aritmética ponderada é $weighted</li>";
                    echo"</ul></h2>";
                }
            ?>
        </div>
    </div>
</body>
</html>
