<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = Hexadecimal
        // 0b = Binário
        // 0  = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Luiz";
        // var_dump($v);

        // $num = (integer) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado é $casado";

        // $vet = [6, 2.5, "maria", 9, false, 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>