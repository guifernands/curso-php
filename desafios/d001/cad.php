<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["nome"];
            $numero_ant = $numero - 1;
            $numero_sus = $numero + 1;

            echo 
            "<p>O número escolhido foi <strong>$numero</strong> 
            <p>O antecessor é <strong>$numero_ant</strong>
            <p>O sucessor é <strong>$numero_sus</strong>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>