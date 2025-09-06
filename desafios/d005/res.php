<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado da Análise</h1>
        <?php 
            $numero = (float) $_GET["numero"] ?? 0;
            $n_inteiro = abs($numero);
            $n_decimal = $numero - floor($numero);
            
            echo "<p>O valor inteiro do número digitado é <strong>$n_inteiro</strong> e o valor decimal é <strong>$n_decimal</strong></p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>