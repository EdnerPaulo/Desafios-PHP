<?php 
    $min = 0;
    $max = 100;
    $num = rand($min, $max);
    // rand gera valores aleatórios entre 0 e 100 ou seja 100 e 0
    // mt_rand gera valores aleatórios entre 0 e 100 
    // random.int() é mais devagar mais gera um numero aleatório seguros
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <style>
        body{
            background-color:rgb(13, 20, 221);
            
        }
        .caixa {
            width: 300px;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            text-align: center;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color:rgb(13, 221, 65);
        }
        .texto {
            font-size: 18px;
            color: #333;
            color: yellow;
        }
        </style>
</head>
<body>
    <div class="caixa">
        <p class="texto">Gerando um número aleatório entre <?php echo $min; ?> e <?php echo $max; ?>...</p>
        <p class="texto">O número gerado foi <strong><?php echo $num; ?></strong></p>
        <button onclick="window.location.reload()" style="background-color:rgb(255, 255, 255)">Gerar Novamente</button>
        
    </div>
</body>
</html>