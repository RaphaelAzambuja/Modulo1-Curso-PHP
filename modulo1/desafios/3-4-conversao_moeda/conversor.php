<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Conversor</title>
</head>
<body> 
    <main>
        <?php
            $initial_date = date("m-d-Y", strtotime("-7 days"));
            $current_date = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $initial_date .'\'&@dataFinalCotacao=\''. $current_date .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $datas = json_decode(file_get_contents($url),true);
            $price = $datas["value"][0]["cotacaoCompra"];
            
            $conv_val = $_POST["conv_val"];    
            $button   = $_POST["button"];
            
            $dollar = $conv_val * $price;

            // Como sou usuario linux não tenho a lib Internallization PHP. Esse seria o código com a biblioteca.
            // $stdfmt = numfmt_create( "pt_BR", NumberFormatter::CURRENCY);
            // echo "<p>Seus ". numfmt_format_currency($stdfmt, $conv_val, "BRL") ."equivalem a ". numfmt_format_currency($stdfmt, $dollar, "USD") ."</p>";

            echo "<h2 style=\"text-align: center;\">Seus R\$". number_format($conv_val, 2, ",", ".") ." equivalem a US\$". number_format($dollar, 2, ",", ".") ."</h2>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>




