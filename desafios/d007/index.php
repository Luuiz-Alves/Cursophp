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
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min='1'>
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $salario = $_GET['salario'] ?? 1;
        $sminimo = 1380.00;
        $resultado = intdiv ($salario, $sminimo);
        $sobra = $salario % $sminimo;

        echo"Quem recebe um salário de R$$salario ganha $resultado salários mínimos + R$$sobra ";       
        ?>
    </section>
</body>
</html>