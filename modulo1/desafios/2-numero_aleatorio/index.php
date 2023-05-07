<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Randomizer</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Gerador de Números Aleatórios</h1>

            <?php 
                $button = $_POST["button"] ?? null;
                $first = $_POST["first"] ?? null;
                $last =  $_POST["last"] ?? null;
            ?>
   
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <h2>Números entre:</h2>
                <input type="text" name="first" value="<?=$first?>" >
                <input type="text" name="last" value="<?=$last?>" >
                <br>
                <input type="submit" name="button" value="Enviar">  
            
            <?php
                $first = (int) $first;
                $last = (int) $last;
                if(isset($button))
                {
                    
                    if ($first == null or $last == null or $first == is_string($first) or $last == is_string($last)) 
                    {
                        echo "<h2>Por favor, digite um número.</h2>";  
                    }
                    else
                    {   
                        $first = (int) $first;
                        $last = (int) $last;
                        $random = mt_rand($first, $last);
                        echo "<h2> $random </h2>";
                    }
                }
            ?>
            </form>
        </div>
    </div>
</body>
</html>