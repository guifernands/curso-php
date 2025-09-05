<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "[SEM NOME]";
            $sobrenome = $_GET["sobrenome"] ?? "[SEM SOBRENOME]";

            print "<p>Olá $nome, seu sobrenome é $sobrenome! </p> <br>"
        ?>
        <p><a href="javascript:history.go(-1)">Volte para página anterior</a></p>
    </main>
</body>
</html>