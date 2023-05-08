<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Salário mínimo</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Sálario mínimo</h1>
            <br>

            <?php
                $minimun_wage = 1220;
                $salary = $_POST["salary"];
                $button = $_POST["button"];
            ?>

            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="salary">Sálario</label>
                <input type="text" name="salary" value="<?=$salary?>">

                <input type="submit" name="button" value="Continuar">
            </form>

            <?php
            if (isset($button))
            {
                $amount_minimun_wage = (int) ($salary/$minimun_wage);
                $rest_salary = $salary%$minimun_wage;
                echo "<h2>Você tem $amount_minimun_wage sálarios mínimos(R\$$minimun_wage) e sobra R\$$rest_salary</h2>";
            }
            ?>
        </div>
    </div>
</body>
</html>
