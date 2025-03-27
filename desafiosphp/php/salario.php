<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
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

     
        /* Estilo para a caixa dividida em 4 partes */
        .caixa {
            display: flex;
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
            padding-left: 80px ;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            height: 50px;
        }   
        .texto {
            display: flex;
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            margin-top: 10px;

            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        
        h3{
            padding: 5px;
            margin: 5px;
            width: 100px;
            text-align: center;
        }
        }     
    </style>
</head>
<body>
    <div class="container">
        <?php 
        $valor = $_GET['salario']?? 0;
        $minimo = 1518.00;
        $quantidade = intval( $valor / $minimo);
        $dinheiro =$valor-( $quantidade * $minimo);

        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Informe seu salário</label>
            <input type="number" name="salario" value="<?=$valor?>" step="any"><br/>
         
            <input type="submit" value="Calcular">      
        </form>
        <?="Considerando  o salário minimo de R$ ",number_format($minimo,2,',','.')?>
        
    </div>
    <div class="texto"><?php
    echo"<h3>Resultado Final</h3>"; 
    echo"<br/> Quem recebe um salário de R$". number_format($valor, 2, ',', '.')." ganha $quantidade salario minimo e sobra + R$ ".number_format($dinheiro, 2, ',', '.')." ." 
    ?></div>
    </div>
    </div>
</body>
</html>