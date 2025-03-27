<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preços</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 5px;
            margin: 5px;
            width: 100px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .resultado {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        .caixa {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
        }

        .caixa div {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            border: 1px solid #ddd;
            height: 50px;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin-top: 10px;
        }
        h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            $preco_prod = $_GET['preco_prod'] ?? 0;
            $porcentual = $_GET['porcentual'] ?? 0;
            $valor_porcento = ($preco_prod / 100) * $porcentual;
            $valor_total = $preco_prod + $valor_porcento;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco_prod">Preço do Produto :</label>
            <input type="number" name="preco_prod" value="<?=$preco_prod?>"><br/>
            <label for="porcentual">Qual será o porcentual de reajuste?</label>
            <input type="range" name="porcentual" min="0" max="100" value="<?=$porcentual?>" id="porcentual">
            <span id="porcentual-value"><?=$porcentual?>%</span>
            <br/>  
            <input type="submit" value="Reajustar?">    
        </form>
       
        <script>
            document.getElementById('porcentual').oninput = function() {
                var porcentual = this.value;
                var preco_prod = document.getElementsByName('preco_prod')[0].value;
                var valor_total = parseFloat(preco_prod) + (preco_prod / 100) * porcentual;
                document.getElementById('porcentual-value').innerHTML = porcentual + '%';
                document.getElementById('valor-total').innerHTML = 'Valor total: ' + valor_total.toFixed(2);
            }
        </script>
        <div class="caixa">
            <h3>Resultado</h3>
            <p>O produto que custa <?=number_format($preco_prod, 2, ",", ".")?>, com <?=$porcentual?>% de aumento vai passar a custar <?=number_format($valor_total, 2, ",", ".")?> a partir de agora.</p>
        </div>
    </div>
</body>
</html>