</pre>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor de Moedas v1.1</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Conversor de Moedas v1.1</h1>
            <h3>Quanto você quer converter?</h3>
            <form method="post">
                <label for="numero">Digite o valor que quer converter (em Reais):</label>
                <input type="number" name="numero" id="numero" required step="0.01">
                <label for="opcao">Escolha uma opção:</label>
                <select name="opcao" id="opcao">
                    <option value="dolar">DÓLAR</option>
                </select>
                <button type="submit">Converter</button>
            </form>

            <?php
            echo "<br>";
            echo "<br>";
            
            
            $inicio = date('m-d-Y', strtotime('-7 day'));
            $fim = date('m-d-Y');
            $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados['value'][0]['cotacaoCompra'];
            //puxando a cotação do dolar do banco central brasil por API
            

            if (isset($dados['value'][0]['cotacaoCompra'])) {
                $cotacao = $dados['value'][0]['cotacaoCompra'];
            } else {
                echo "<p>Erro ao obter a cotação do dólar.</p>";
                exit;
            }
            
            echo "<h1>Veja o resultado</h1>";
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Convertendo o valor para float
                $numero = (float)$_POST['numero'];
                $opcao = $_POST['opcao'];

                if ($opcao == 'dolar') {
                    // Calculando o valor convertido de Reais para Dólar
                    $resultado = $numero / $cotacao; // Divisão para converter BRL para USD

                    // Exibindo o resultado
                    echo "<p>Você escolheu: " . ucfirst($opcao) . "</p>";
                    echo "<p>Valor em Reais: R$ " . number_format($numero, 2, ',', '.') . "</p>";
                    echo "<p>Valor convertido para " . ucfirst($opcao) . ": " . number_format($resultado, 2, ',', '.') . "</p>";
                } else {
                    echo "<p>Selecione uma moeda válida.</p>";
                }
            }
            ?>
        </div>
    </body>
</html>

