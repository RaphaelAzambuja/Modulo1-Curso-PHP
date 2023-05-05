<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Randomizer</title>
</head>
<body>
   <header>
       <h1>Gerador de Números Aleatórios</h1>
    </header> 
    
    <section>
        
        <form method="post">
            <h2>Números entre:</h2>
            <input type="text" name="first">
            <input type="text" name="last">
            <br>
            <input type="submit" name="button" value="Enviar">  
        
            <?php     
                $button = $_POST["button"];
                $first = (int) $_POST["first"] ?? null;
                $last = (int) $_POST["last"] ?? null;
                
                if(isset($button))
                {
                    if ($first == null or $last == null) 
                    {
                        echo "<h2 style=\"text-align: center;\">Por favor, digite um número.</h2>";  
                    }
                    else
                    {
                        $random = mt_rand($first, $last);
                        echo "<h2 style=\"text-align: center;\"> $random </h2>";
                    }
                }
            ?>
        </form>

    </section>
</body>
</html>