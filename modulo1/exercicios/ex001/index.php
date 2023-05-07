<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do servidor</title>
</head>
<body>
    <h1 style="text-align: center;" >Dados do servidor</h1>
    <?php 
        //Como o próprio comando diz, ele serve para dar as informações sobre 
        //o PHP e dados de seus recursos(como se o PDO está ativado ou não)
        
        phpinfo();
    ?>
</body>
</html>