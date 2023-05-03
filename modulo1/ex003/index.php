<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //0x = Hexadecimal 
        //0b = Binario 
        //0  = Octal
        $num = 300;
        echo "O valor da variável é $num ";
        
        $teste_var_dump = 45.2;
        echo" <br> O tipo de teste_var_dump é "; var_dump($teste_var_dump);

        $num_elevado = (int) 3e2;

        echo" <br> O valor de 3 elevado a 2 é $num_elevado";

    ?>
</body>
</html>