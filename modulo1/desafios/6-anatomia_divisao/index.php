<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Divisão</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Anatomia da divisão</h1>
            <?php
                $dividend = $_POST["dividend"] ?? null;
                $divisor  = $_POST["divisor"] ?? null;
                $button   = $_POST["button"];
            ?>
            
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="dividend">Dividendo</label>
                <input type="text" name="dividend" value="<?=$dividend?>">

                <label for="divisor">Divisor</label>
                <input type="text" name="divisor" value="<?=$divisor?>">

                <input type="submit" name="button" value="Continuar">
            </form>

            <h2>Estrutura da divisão</h2>

            <?php
            if (isset($button))
            {
                $quotient = (int)($dividend / $divisor);
                $rest     = $dividend % $divisor;

                echo "<ul>";
                echo "<li>Dividendo: $dividend</li>";
                echo "<li>Divisor: $divisor</li>";
                echo "<li>Quociente $quotient</li>";
                echo "<li>Resto: $rest</li>";
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</body>
</html>
