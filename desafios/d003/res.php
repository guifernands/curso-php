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
        <h1>Conversor de Moedas 1.0</h1>
        <?php 
            $numero = $_GET["numero"];
            $conv = $numero / 5.20;

            echo "<p>O valor de R\$$numero para dólar é <strong>US\$$conv</strong></p>"
        ?>
        <p><strong>*Cotação fixa de R$5,20</strong></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>