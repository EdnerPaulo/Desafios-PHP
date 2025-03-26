<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idades</title>
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
        $ano_nasc = $_GET['ano_nasc']?? null;
        $ano_atual = $_GET['ano_atual'] ?? null;
        $usar_ano_atual = $_GET['usar_ano_atual'] ??date('Y');

       
        $idade = $ano_atual - $ano_nasc;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu :</label>
            <input type="number" name="ano_nasc" value="<?=$ano_nasc?>"><br/>
            <label for="ano_atual">Quer saber sua idade em que ano?(Atualmente estamos em <?=$usar_ano_atual?>)</label>
            <input type="number" name="ano_atual"value="<?=$ano_atual?>"><br/>  
            
            <input type="submit" value="Qual será minha idade?">      
        </form>
        <div class="caixa">
        <?php
            echo"<h3>Resultado</h3>"; 
            echo"<p>Quem nasceu em $ano_nasc vai ter $idade anos em $ano_atual :</p>"; 
        ?>
    
    
    </div>
    </div>
    </div>
</body>
</html>