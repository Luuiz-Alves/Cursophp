<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $numero = $_GET["valor"] ?? 0;
            $cotacao = 4.96;
            
            echo "Seus R$ <strong>". $numero ."</strong> equivalem a US$ <strong>". $numero / $cotacao. "</strong>";
            echo "<p><strong>*Cotação fixa de R$4,96 informada diretamente no código.</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
    </main>
</body>
</html>