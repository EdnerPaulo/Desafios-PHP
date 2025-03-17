<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Conversor de Moedas v1.0</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Conversor de Moedas v1.0</h1>
            <h3>Quanto você quer converter?</h3>
            <form method="post">
                <label for="numero">Digite o valor que quer converter (em Reais):</label>
                <input type="number" name="numero" id="numero" required step="0.01">
                <label for="opcao">Escolha uma opção:</label>
                <select name="opcao" id="opcao">
                    <option value="dolar">DÓLAR</option>
                    <option value="euros">EUROS</option>
                    <option value="iene">IENE</option>
                </select>
                <button type="submit">Converter</button>
            </form>

            <?php
            echo "<br>";
            echo "<br>";
            echo "<h1>Veja o resultado</h1>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Convertendo o valor para float
                $numero = (float)$_POST['numero'];
                $opcao = $_POST['opcao'];

                // Definindo as taxas de câmbio (Reais para a moeda escolhida)
                $taxas = [
                    'dolar' => 1 / 5.25,  // 1 BRL = 1/5.25 USD
                    'euros' => 1 / 5.55,  // 1 BRL = 1/5.55 EUR
                    'iene' => 1 / 0.039   // 1 BRL = 1/0.039 JPY
                ];

                // Verificando se a moeda escolhida existe nas taxas
                if (isset($taxas[$opcao])) {
                    // Calculando o valor convertido de Reais para a moeda escolhida
                    $resultado = $numero * $taxas[$opcao];

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
