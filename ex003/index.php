<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>
        Teste de Tipos primitivos
    </h1>

    <?php 
      $num = 300;
      print "O valor da variável é $num";
      
      echo "<br> <br>";

      $num_real = 12.5;
      var_dump($num_real);

      echo "<br> <br>";

      $lista = [2,"gui", true, 2.3];
      var_dump($lista);

      echo "<br> <br>";
      
      class Pessoa {
        private string $nome;
      }

      $p = new Pessoa;
      var_dump($p);
    ?>
</body>
</html>