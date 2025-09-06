<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gere um número aleatório de <strong>0</strong> a <strong>100</strong>...</p>

        <?php 
            $min = 0;
            $max = 100;
            $num_random = mt_rand($min, $max);

            echo "<p>O número gerado foi <strong>$num_random</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload();">Gerar outro número</button>
    </section>
</body>
</html>