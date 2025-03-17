<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    <?php
        $numero = isset($_GET['numero'])? (float)$_GET['numero']:0;

        $parteInteira = floor($numero);
        $parteFracionaria = $numero - $parteInteira;
        echo "<h1>Analisador de Número Real</h1>";
        echo "<br>";
        echo "Analisadondo o número $numero informado pelo usuário:";
        echo "<br><ul>";
        echo "<h1>Veja o resultado</h1>";
        echo "<br>";
        echo "<li>A parte inteira do numero é ".$parteInteira."</li>";
        echo "<br>";
        echo " <li>A parte fracinária do numero é " . number_format($parteFracionaria, 2, ',', '.') . "</li>";
        echo "<br></ul>";
        
        ?>
         <br>
    <!-- Adicionando o botão para voltar à página anterior -->
    <button onclick="window.history.back();">Voltar</button>
    </div>
</body>
</html>