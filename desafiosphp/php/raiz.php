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
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Alinhando os resultados um abaixo do outro */
        .caixa {
            display: block;
            width: 300px;
            margin: 20px auto;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            text-align: center;
            padding: 15px;
        }

        .caixa div {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            padding: 10px 0;
        }   

        .texto {
            display: block;
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 10px auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .texto h3 {
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        $valor = $_GET['numero']?? 1;
        $quadrada = sqrt($valor);
        $cubica = $valor ** (1/3);
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Informe seu Número</label><br/>
            <input type="number" name="numero" value="<?=$valor?>"><br/>
         
            <input type="submit" value="Calcular Raizes">      
        </form>       
    </div>
            <div class="texto">
                <?php
                    echo"<h3>Resultado Final</h3>"; 
                    echo"<p>Analisando o  número $valor, temos: </p>"; 
                    echo"<br/><ul> ";
                    echo"<br/><li>A raiz quadrada é ".number_format($quadrada,2,",",".")."</li> "; 
                    echo"<br/><li>A raiz cubica é ".number_format($cubica,2,",",".")."</li> "; 
                    echo"<br/></ul> " 
                ?>
            </div>
    </div>
    </div>
</body>
</html>