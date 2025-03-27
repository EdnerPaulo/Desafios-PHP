<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
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
            $valor = $_GET['$valor'] ?? null;
            $nota100 = 0;
            $nota50 =  0;
            $nota10 = 0;
            $nota5 = 0;
            $nota2 = 0;

            if ($valor > 0 ) {
                $nota100 = floor($valor / 100);
                $valor %= 100;
                $nota50 = floor($valor / 50);
                $valor %= 50;
                $nota10 = floor($valor / 10);
                $valor %= 10;
                $nota5 = floor($valor / 5);
                $valor %= 5;
                $nota2 = floor($valor / 2);
            }
        ?>
        <h2>Totalizando Tudo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor deseja sacar?(R$)*<?=$valor?></label>
            <input type="number" name="$valor" value="<?=$valor?>"><br/>          
            <input type="submit" value="Calcular">      
        </form>
        <div class="caixa">
            <?php
                 echo "<h3>Totalizando Tudo</h3>"; 
                 echo "<p>Analisando o valor que você digitou, $valor ";
                 echo "<br/><ul>";
                 if ($nota100 > 0) {
                     echo "<li><img src='nota100.png' alt='Nota de R$100'> $nota100 notas de R$100</li> ";
                 }
                 if ($nota50 > 0) {
                     echo "<li><img src='nota50.png' alt='Nota de R$50'> $nota50 notas de R$50</li> ";
                 }
                 if ($nota10 > 0) {
                     echo "<li><img src='nota10.png' alt='Nota de R$10'> $nota10 notas de R$10</li> ";
                 }
                 if ($nota5 > 0) {
                     echo "<li><img src='nota5.png' alt='Nota de R$5'> $nota5 notas de R$5</li> ";
                 }
                 if ($nota2 > 0) {
                     echo "<li><img src='nota2.png' alt='Nota de R$2'> $nota2 notas de R$2</li> ";
                 }
                 echo "<br/></ul>"  
            ?>   
        </div>
    </div>
</body>
</html>