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
            $cotacao = 5.00;
            $real = $_GET["valor"] ?? 0;
            $dolar = $real / $cotacao;

            //Formatação de moedas com internacionalização!

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD </strong></p>");
            echo "<p><strong>*Cotação fixa de R$5,00 informada diretamente no código.</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">⬅ Voltar</button>
    </main>
</body>
</html>