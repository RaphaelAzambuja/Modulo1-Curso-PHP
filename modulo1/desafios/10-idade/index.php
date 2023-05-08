<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Máquina do tempo</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Máquina do tempo</h1>
            <br>

            <?php
                $birth_date = $_POST["birth"];
                $random_date = $_POST["random_date"];
                $button = $_POST["button"];
            ?>

            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <label for="birth">Ano de nascimento</label>
                <br>
                <input type="text" name="birth" value="<?=$birth_date?>">
                <br>
                <label for="birth">Quer saber sua idade em que ano?</label>
                <br>
                <input type="text" name="random_date" value="<?=$random_date?>">
                <br><br>
                <input type="submit" name="button" value="Continuar">
            </form>

            <?php
                if (isset($button))
                {
                    if($random_date > $birth_date)
                    {
                        if ($random_date < $birth_date)
                        {
                            echo "<h2>Como assim??? Tu não sabe a tua idade?</h2>";
                        }
                        else
                        {
                            $solution = $random_date - $birth_date;
                            echo "<h2>Você tem $solution anos de idade</h2>";
                        }
                    }
                    else
                    {
                        echo "<h2> EITA BICHO!!! Idade negativa? \u{1F928}</h2>";
                    }
                }
            ?>

        </div>
    </div>
</body>
</html>
