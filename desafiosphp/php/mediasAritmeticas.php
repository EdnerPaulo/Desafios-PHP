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

    </style>
</head>
<body>
    <div class="container">
        <?php 
        $valor1 = $_GET['valor1']?? 0;
        $peso1 = $_GET['peso1']?? 0; 
        $valor2 = $_GET['valor2']?? 0;
        $peso2 = $_GET['peso2']?? 0; 
        $media = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($peso1 + $peso2) != 0 ? (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2) : 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor:</label>
            <input type="number" name="valor1" value="<?=$valor1?>"><br/>
            <label for="peso1">1º Peso:</label>
            <input type="number" name="peso1"value="<?=$peso1?>"><br/>  
            <label for="valor2">2º Valor:</label>
            <input type="number" name="valor2" value="<?=$valor2?>"><br/>
            <label for="peso2">2º Peso:</label>
            <input type="number" name="peso2"value="<?=$peso2?>"><br/>  
            <input type="submit" value="Calcular Medias">      
        </form>
        <div class="caixa">
        <?php
            echo"<h3>Resultado Final</h3>"; 
            echo"<p>Analisando os valores $valor1 e $valor2, temos:</p>"; 
            echo"<br/><ul> ";
            echo"<br/><li>A media Aritmética Simples entre os valores é ".number_format($media,2,",",".")."</li> "; 
            echo"<br/><li>A media Aritmética Ponderada com peso $peso1 e $peso2 é ".number_format($mediaPonderada,2,",",".")."</li> "; 
            echo"<br/></ul> " 
        ?>
    
    
    </div>
    </div>
    </div>
</body>
</html>