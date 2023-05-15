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
    <?php 
        $valor1 = $_GET['divid'] ?? 0;
        $valor2 = $_GET['divis'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="divid">Dividendo</label>
            <input type="number" name="divid" id="divid" min="0" value="<?=$valor1?>">
            <label for="divis">Divisor</label>
            <input type="number" name="divis" id="divis" min="1" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            // Cálculos
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>