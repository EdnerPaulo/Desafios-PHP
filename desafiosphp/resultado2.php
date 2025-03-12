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
$numeroAleatorio = rand(1, 100);
echo "<h1>Trabalhando com números aleatórios</h1>";
echo "<br>";
echo "Gerando um número aleatório entre 1 e 100...";
echo "<br>";
echo "<h1>Veja o resultado</h1>";
echo "<br>";
echo " O Número aleatório gerado foi : ";
echo "<h2>$numeroAleatorio</h2>";
?>
<Form>
<input type="submit" value="Novo Número">   
</Form>
</div>
</body>
</html>