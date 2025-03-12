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
$numero = $_GET['numero']?? "Sem valor";
$ante = $numero -1 ;
$pred = $numero + 1;
echo "<h1>Veja o resultado</h1>";
echo "<br>";
echo "O número antecessor é $ante";  
echo "<br>";
echo "<br>";
echo "<strong>O número é $numero</strong>";  
echo "<br>";
echo "<br>";
echo "O número sucessor é $pred";  
echo "<br>";




?>

    </div>
</body>
</html>