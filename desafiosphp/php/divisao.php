<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
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
            width: 300px;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        input {
            padding: 5px;
            margin: 5px;
            width: 100px;
            text-align: center;
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
            background-color: #218838;
        }

        .resultado {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Estilo para a caixa dividida em 4 partes */
        .caixa {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 0;
            width: 200px;
            margin: 20px auto;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
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
        }

        /* Ajustar bordas específicas */
        .caixa .top-left {
            border-right: 2px solid #ccc; /* Borda preta na direita */
            border-bottom: 2px solid #ccc; /* Borda preta embaixo */
        }

        .caixa .top-right {
            border-left: 2px solid black;
            border-bottom: 2px solid black;
        }

        .caixa .bottom-left {
            border-right: 2px solid #ccc;
            border-top: 2px solid #ccc;
        }

        .caixa .bottom-right {
            border-left: 2px solid black;
            border-top: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        $valor = $_GET['dividendo']?? 0;
        $valor1 = $_GET['divisor']?? 1; 
        $divisao = number_format($valor / $valor1, 2, ',', '.');
        $restodc = $valor % $valor1;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" value="<?=$valor?>"><br/>
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor"value="<?=$valor1?>"><br/>  
            <input type="submit" value="Dividir">      
        </form>
        <div class="caixa">
            <div class="top-left"><?=$valor?></div> <!-- Dividendo -->
            <div class="top-right"><?=$valor1?></div> <!-- Divisor -->
            <div class="bottom-left"><?=$restodc?></div> <!-- Resto -->
            <div class="bottom-right"><?=$divisao?></div> <!-- Quociente -->
        </div>
    </div>
    </div>
</body>
</html>