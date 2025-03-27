<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
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
            $segundos = $_GET['segundos'] ?? 0;
            $mes = floor($segundos / (30 * 24 * 60 * 60));
            $semanas = floor(($segundos % (30 * 24 * 60 * 60)) / (7 * 24 * 60 * 60));
            $dias = floor(($segundos % (7 * 24 * 60 * 60)) / (24 * 60 * 60));
            $horas = floor(($segundos % (24 * 60 * 60)) / (60 * 60));
            $minutos = floor(($segundos % (60 * 60)) / 60);
            $segundosRestantes = $segundos % 60;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual o total de segundos ?</label>
            <input type="number" name="segundos" value="<?=$segundos?>"><br/>          
            <input type="submit" value="Calcular">      
        </form>
        <div class="caixa">
            <?php
                echo"<h3>Totalizando Tudo</h3>"; 
                echo"<p>Analisando o valor que você digitou, $segundos  segundo equivalem a um total de :</p>";
                echo"<br/><ul>";
                echo"<br/><li>$mes meses </li> "; 
                echo"<br/><li>$semanas semanas </li> "; 
                echo"<br/><li>$dias dias   </li> "; 
                echo"<br/><li>$horas horas </li> "; 
                echo"<br/><li>$minutos minutos </li> "; 
                echo"<br/><li>$segundosRestantes segundos </li> "; 
                echo"<br/></ul>" 
            ?>   
        </div>
    </div>
</body>
</html>