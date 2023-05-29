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
        $sminimo = 1_380.60;
        $salario = $_GET['salario'] ?? 1;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min='1' value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($sminimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $resultado = intdiv ($salario, $sminimo);
        $sobra = $salario % $sminimo;

        echo"Quem recebe um salário de R$". number_format($salario, 2, ",", ".") ." ganha <strong>$resultado salários mínimos</strong> + R$". number_format($sobra, 2, ",", ".") ."";       
        ?>
    </section>
</body>
</html>