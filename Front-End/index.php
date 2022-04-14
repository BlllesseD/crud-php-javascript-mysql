<?php
session_start();
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
  <title>CRUD - Estágio Infornet</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <h2>CRUD - Infornet</h2>
    </div>
    <?php
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    <form id="form" class="form" method="POST" action="processar.php">
      <div class="form-control">
        <label>Nome: </label>
        <input type="text" id="nomee" name="nome" placeholder="Digite seu nome... " />
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>

      <div class="form-control">
        <label>Documento:</label>
        <input type="number" id="documentoo" name="documento" placeholder="Digite o documento... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Data de Nascimento: </label>
        <input type="date" id="dataa" name="nascimento" placeholder="Digite sua data de nascimento... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Sexo: </label>
        <input type="text" id="sexoo" name="sexo" placeholder="Digite o seu sexo... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Situação: </label>
        <input type="text" id="situacaoo" name="situacao" placeholder="Ativo ou Inativo? ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Logradouro: </label>
        <input type="text" id="logradouroo" name="logradouro" placeholder="Digite o seu endereço... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Número: </label>
        <input type="number" id="numeroo" name="numero" placeholder="Digite o número ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Bairro: </label>
        <input type="text" id="bairroo" name="bairro" placeholder="Digite o bairro... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Cidade: </label>
        <input type="text" id="cidadee" name="cidade" placeholder="Digite a sua cidade... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Estado: </label>
        <input type="text" id="estadoo" name="estado" placeholder="Digite seu estado... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>E-mail: </label>
        <input type="email" id="emaill" name="email" placeholder="Digite o seu e-mail... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>
      <div class="form-control">
        <label>Telefone: </label>
        <input type="number" id="telefonee" name="telefone" placeholder="Digite o seu telefone... ">
        <i class="fas fa-exclamation-circle"></i>
        <i class="fas fa-check-circle"></i>
        <small>Erro</small>
      </div>

      <input class="button" type="submit" value="Cadastrar">
    </form>
  </div>

  <script src="https://kit.fontawesome.com/d19fd7af1f.js" crossorigin="anonymous"></script>
  <script src="./scripts.js"></script>
</body>

</html>