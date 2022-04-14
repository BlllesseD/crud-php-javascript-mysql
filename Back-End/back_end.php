<?php
//                                              Atividade 1
// A) Ler um número (de 1 a 12) e informe o mês correspondente por extenso.

$mes = 11;

if ($mes == 1) {
  echo "O mês contido na variável é Janeiro!\n\n";
} elseif ($mes == 2) {
  echo "O mês contido na variável é Fevereiro!\n\n";
} elseif ($mes == 3) {
  echo "O mês contido na variável é Março!\n\n";
} elseif ($mes == 4) {
  echo "O mês contido na variável é Abril!\n\n";
} elseif ($mes == 5) {
  echo "O mês contido na variável é Maio!\n\n";
} elseif ($mes == 6) {
  echo "O mês contido na variável é Junho!\n\n";
} elseif ($mes == 7) {
  echo "O mês contido na variável é Julho!\n\n";
} elseif ($mes == 8) {
  echo "O mês contido na variável é Agosto!\n\n";
} elseif ($mes == 9) {
  echo "O mês contido na variável é Setembro!\n\n";
} elseif ($mes == 10) {
  echo "O mês contido na variável é Outubro!\n\n";
} elseif ($mes == 11) {
  echo "O mês contido na variável é Novembro!\n\n";
} elseif ($mes == 12) {
  echo "O mês contido na variável é Dezembro!\n\n";
} else {
  echo "Entrada incorreta, por favor escolha um número de 1 a 12! \n\n";
}

//                                              Atividade 2

//  b) Ler a data de nascimento do usuário e imprima se o mesmo é maior de 18 anos e a idade calculada.

function calcularIdade($data)
{
  $idade = 0;
  $data_nascimento = date('Y-m-d', strtotime($data));
  $data = explode("-", $data_nascimento);
  $anoNasc    = $data[0];
  $mesNasc    = $data[1];
  $diaNasc    = $data[2];

  $anoAtual   = date("Y");
  $mesAtual   = date("m");
  $diaAtual   = date("d");

  $idade      = $anoAtual - $anoNasc;
  if ($mesAtual < $mesNasc) {
    $idade -= 1;
  } elseif (($mesAtual == $mesNasc) && ($diaAtual <= $diaNasc)) {
    $idade -= 1;
  }

  return $idade;
}

$descobrirIdade = (calcularIdade("12/11/1991"));

if ($descobrirIdade < 18) {
  echo "O usuário é menor de idade e possui $descobrirIdade anos!\n\n";
} else {
  echo "O usuário é maior de idade e possui $descobrirIdade anos!\n\n";
}

//                                              Atividade 3

//  C) Ler um número e imprimir a tabuada do mesmo.

$numero = 8;

for ($i = 0; $i <= 10; $i++) {
  $resultado = $i * $numero;
  echo $tabuada = "$numero x $i = $resultado";
  echo PHP_EOL;
}

//                                               Atividade 4

// D) Criar um array com 20 números inteiros. Você deverá imprimir o maior e o menor número desse array, além de calcular e exibir o percentual de números pares e ímpares, e por fim, o valor médio dos números desse array.

$numeros = array(1, 2, 3, 15, 5, 37, 7, 11, 40, 10, 11, 12, 13, 255, 15, 16, 17, 18, 19, 97);
$contador = 0;
$contadorImpar = 0;
foreach ($numeros as $numero) {
  if ($numero % 2 == 0) {
    $contador++;
  } elseif ($numero % 2 != 0) {
    $contadorImpar++;
  }
}

$porcentagemPares = ($contador / 20) * 100;
$porcentagemImpares = ($contadorImpar / 20) * 100;
$media = array_sum($numeros) / count($numeros);

echo "\nO Maior número deste array é o: " . max($numeros);
echo "\n\nO Menor número deste array é o: " . min($numeros);
echo "\n\nPorcentagem de pares " . $porcentagemPares . "%";
echo "\n\nPorcentagem de impares " . $porcentagemImpares . "%";
echo "\n\nA média dos números deste array é: $media";


//                                              Atividade 5

// E) Ler o valor de um boleto bancário, data de vencimento e o valor percentual de juros diário por atraso. Imprima qual o novo valor que o usuário deverá pagar do boleto caso pague na data de hoje.

$valor_boleto = 337;
$vencimento = date_create('05-04-2022');
$juros_diarios = 4;
$dataHoje = date_create();
$diferencaDia = date_diff($dataHoje, $vencimento);
$dias = $diferencaDia->days;
$totalDiasJuros = $dias * $juros_diarios;
$valorTotal = $valor_boleto + ($valor_boleto / 100 * $totalDiasJuros);

echo "\n\nSe o boleto for pago " . date('d/m/y') . ", seu valor será de: R$ $valorTotal";
