<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>Conversor de moeda</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <h1>Conversor de moeda</h1>
            <h2>Valor para conversão:</h2>
            
            <?php
                $initial_date = date("m-d-Y", strtotime("-7 days"));
                $current_date = date("m-d-Y");
                
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $initial_date .'\'&@dataFinalCotacao=\''. $current_date .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                
                $datas = json_decode(file_get_contents($url),true);
                $price = $datas["value"][0]["cotacaoCompra"];
                
                $conversion_value = $_POST["conversion_value"];    
                $button   = $_POST["button"];
                
                $dollar = $conversion_value * $price;
            ?>
            
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">    
                <input type="text" name="conversion_value" value="<?=$conversion_value?>">
                <br>
                <input type="submit" name="button" value="Enviar">
            </form>
            
            <?php
                if (isset($button))
                {

                    echo "<h2>Seus R\$". number_format($conversion_value, 2, ",", ".") ." equivalem a US\$". number_format($dollar, 2, ",", ".") ."</h2>";
                }
                
                // Como sou usuario linux não tenho a lib Internallization PHP. Esse seria o output com a biblioteca.
                // $stdfmt = numfmt_create( "pt_BR", NumberFormatter::CURRENCY);
                // echo "<p>Seus ". numfmt_format_currency($stdfmt, $conv_val, "BRL") ."equivalem a ". numfmt_format_currency($stdfmt, $dollar, "USD") ."</p>";
            ?>
        </div>
    </div>
</body>
</html>