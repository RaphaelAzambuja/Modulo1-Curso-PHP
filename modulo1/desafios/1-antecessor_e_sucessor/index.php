<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Sucede e antecede :)</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Antecessor e sucessor</h1>
            <p>Digite um número para obter o antecessor e sucessor</p>
            
            <?php 
                $number = $_POST["number"] ?? null; 
                $button = $_POST["button"];
            ?>
            
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <input type="text" name="number" value="<?=$number?>">
                <br>
                <input type="submit" name="button" value="Enviar">
            </form>
            
            <?php 
                if(isset($button))
                {
                    $number = (int) $number;
                    if ($number == null or $number == is_string($number)) 
                    {
                        echo "<h2>Por favor, digite um número.</h2>";  
                    }
                    else
                    {
                        echo "<h2>O antecessor de $number é ". $number - 1 ." e seu sucessor é ". $number + 1 ."</h2>";
                    }
                }
            ?>
        
        </div>
    </div>
</body>
</html>

