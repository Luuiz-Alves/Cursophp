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
        <h1>Informe um número</h1>
        <?php 
            $numero = $_GET['numero'];
            $quadrada = sqrt($numero);
            $cubica = pow($numero, 1/3);
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" min='1' value="<?=$numero?>" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "
                Analisando o <strong>número $numero</strong>, temos:
                <ul>
                <li>A sua raiz quadrada é <strong>". number_format($quadrada, 3, ",") ." </strong> </li>
                <li>A sua raiz cúbica é <strong>". number_format($cubica, 3, ",") ."</strong> </li>
                </ul>
            ";
        ?>
    </section>
</body>
</html>