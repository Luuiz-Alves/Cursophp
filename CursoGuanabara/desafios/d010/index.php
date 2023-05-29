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
        <?php
        $atual = date("Y");
        $anonasci = $_GET['anonasci'] ?? '2000';
        $idadeano = $_GET['idadeano'] ?? $atual;
        
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonasci">Em que ano você nasceu?</label>
            <input type="number" name="anonasci" id="anonasci" min="1900" max="<?=$atual?>" value="<?=$anonasci?>">
            <label for="idadeano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="idadeano" id="idadeano" min="1900" value="<?=$idadeano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $resultado = $idadeano - $anonasci;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anonasci?> vai ter <strong><?=$resultado?> anos</strong> em <?=$idadeano?>!</p>
    </section>
</body>
</html>