<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Sus</title>
</head>
<body> 
    <main>
        <?php 
            //$name = $_GET["name"] ?? "";
            //$last_name = $_GET["last_name"] ?? "";

            $full_name = ucfirst($_GET["name"]) ." ". ucfirst($_GET["last_name"]) ?? " ";

            if ($full_name == " ") 
            {
                echo "<h2>Ok... Mas qual é o seu nome? :(</h2>";  
            }
            else
            {
                echo "<h2>É um prazer te conhecer, $full_name!</h2>";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>