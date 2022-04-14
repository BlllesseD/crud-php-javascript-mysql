<!-- Desafio 1:
Agora sim, uma tela completa, com front-end, entrada de dados, e leitura dos mesmos no back-end em PHP. A ideia é criar uma calculadora bem simples, para isso crie uma tela para que o usuário digite dois números (duas caixas de texto) e a operação desejada (soma, subtração, multiplicação ou divisão), e um botão de calcular. Ao solicitar a operação de calcular (clique no botão), você deverá enviar as informações ao back-end em PHP para que o mesmo faça o cálculo e devolva o resultado da operação. -->
<?php

$op1 = 0;
$op2 = 0;
$resultado = 0;
$calcular = 'somar';


if (isset($_GET['op1'], $_GET['op2'], $_GET['calcular'])) {
  $op1 = $_GET['op1'];
  $op2 = $_GET['op2'];
  $calcular = $_GET['calcular'];

  switch ($calcular) {
    case 'somar';
      $resultado = $op1 + $op2;
      break;

    case 'subtrair';
      $resultado = $op1 - $op2;
      break;

    case 'multiplicar';
      $resultado = $op1 * $op2;
      break;

    case 'dividir';
      $resultado = $op1 / $op2;
      break;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,400;1,600&display=swap" rel="stylesheet" />
  <title>Calculadora em PHP</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <form>
        Primeiro Número <br />
        <input type="number" name="op1" value=<?= $op1 ?> required /><br />
        Segundo Número <br />
        <input type="number" name="op2" value=<?= $op2 ?> required /><br /><br />
        <select name="calcular">

          <option value="somar" <?= ($calcular == 'somar') ? 'Selected' : ''; ?>>Somar</option>
          <option value="subtrair" <?= ($calcular == 'subtrair') ? 'Selected' : ''; ?>>Subtrair</option>
          <option value="multiplicar" <?= ($calcular == 'multiplicar') ? 'Selected' : ''; ?>>Multiplicar</option>
          <option value="dividir" <?= ($calcular == 'dividir') ? 'Selected' : ''; ?>>Dividir</option>
        </select>
        <br /><br />

        <input type="submit" name="Calcular" />
        <br />
        <p>O resultado é: <?= $resultado  ?></p>

      </form>
    </div>
</body>

</html>