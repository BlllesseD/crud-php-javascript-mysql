<?php
session_start();
include_once("conectar.php");
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
  <title>CRUD Infornet</title>
</head>

<body>

  <?php
  // Descobrir idade

  // function getAge($nascimento)
  // {
  //   $from = new DateTime($nascimento);
  //   $to   = new DateTime('today');
  //   return $from->diff($to)->y;
  // };

  $nome = filter_input(INPUT_POST, 'nome');
  $documento = filter_input(INPUT_POST, 'documento');
  $nascimento = filter_input(INPUT_POST, 'nascimento',);
  $sexo = filter_input(INPUT_POST, 'sexo',);
  $situacao = filter_input(INPUT_POST, 'situacao',);
  $logradouro = filter_input(INPUT_POST, 'logradouro',);
  $numero = filter_input(INPUT_POST, 'numero',);
  $bairro = filter_input(INPUT_POST, 'bairro',);
  $cidade = filter_input(INPUT_POST, 'cidade',);
  $estado = filter_input(INPUT_POST, 'estado',);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $telefone = filter_input(INPUT_POST, 'telefone',);
  ?>


  <div class="container">
    <div class="header">
      <?php
      // Código para retornar dados na tela como pedido
      echo "Nome: $nome <br>";
      echo "Documento: $documento <br>";
      echo "Data de Nascimento: $nascimento <br>";
      echo "Sexo: $sexo <br>";
      echo "Situação: $situacao <br>";
      echo "Logradouro: $logradouro <br>";
      echo "Número: $numero <br>";
      echo "Bairro: $bairro <br>";
      echo "Cidade: $cidade <br>";
      echo "Estado: $estado <br>";
      echo "E-mail: $email <br>";
      echo "Telefone: $telefone <br>";
      ?>
    </div>
    <?php
    $resultado_beneficiario = "INSERT INTO beneficiario ( nome, documento, nascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone) VALUES ( '$nome', '$documento', '$nascimento', '$sexo', '$situacao', '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$email', '$telefone' )";
    $beneresultado = mysqli_query($conn, $resultado_beneficiario);

    // if (mysqli_insert_id($conn)) {
    // $_SESSION['msg'] = "<p style='color:green;>Usuário cadastrado com sucesso!</p>";
    //   header("Location: index.php");
    // } else {
    //   $_SESSION[' msg']="<p style='color:red;>Usuário não cadastrado!</p>" ; // header("Location: index.php"); // } 
    ?>

</body>

</html>