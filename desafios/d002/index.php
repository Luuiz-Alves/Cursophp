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
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $num_aleatorio = mt_rand(0, 100);
            // rand() = 1951 - Linear Congrential Gererator
            // mt_rand = 1997 - Mersenne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rant()
            // random_int() gera números aleatórios criptograficamente seguros

            echo "Gerando um número aleatório entre 0 e 100... <br>";
            echo "O valor gerado foi: <strong>" . $num_aleatorio;
        ?>
        <button onclick="location.reload()">🔄Gerar outro</button>
    </main>
</body>
</html>