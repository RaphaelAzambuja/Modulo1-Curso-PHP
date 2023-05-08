<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Raízes</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Tirar raiz quadrada e cúbica</h1>
            <br>

            <?php
                $number = $_POST["number"];
                $button = $_POST["button"];
            ?>

            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="number">Número</label>
                <input type="text" name="number" value="<?=$number?>">

                <input type="submit" name="button" value="Continuar">
            </form>

            <?php
                if (isset($button))
                {
                    $sqr_root = $number ** (1/2);
                    $cb_root = $number ** (1/3);
                    echo "<h2><ul>";
                    echo "<li>A raiz quadrada de $number é $sqr_root</li>";
                    echo "<li>A raiz cúbica de $number é $cb_root</li>";
                    echo "</ul></h2>";
                }
            ?>
        </div>
    </div>
</body>
</html>
