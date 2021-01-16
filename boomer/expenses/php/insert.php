<?php

$url_session = $_SESSION["url_session"];


// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
$data = date('Y-m-d', time());
$hora = date('H:i:s', time());


// inicio PHP Form Validation //
if ($_SERVER["REQUEST_METHOD"] == "POST") {



// inicio Select Empresa MySQL //
$sql2 = "SELECT Id, Nome, Segmento, Logradouro, Bairro, Cidade, Estado FROM Empresa WHERE Id = '$url_session'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $nome_empresa = $row["Nome"];
    $segmento_empresa = $row["Segmento"];
    $logradouro_empresa = $row["Logradouro"];
    $bairro_empresa = $row["Bairro"];
    $cidade_empresa = $row["Cidade"];
    $estado_empresa = $row["Estado"];

  }
}
// fim Select Empresa MySQL //



// inicio Insert MySQL //
// prepare and bind
$stmt = $conn->prepare("INSERT INTO Despesa (Empresa_Nome, Empresa_Segmento, Empresa_Logradouro, Empresa_Bairro, Empresa_Cidade, Empresa_Estado, Produto_Nome, Produto_Tipo, Produto_Marca, Produto_Descricao, Complemento, Forma_Pagamento, Quantidade, Unidade, Valor_Unitario, Valor_Total, Data, Hora) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssssssssss", $nome_empresa, $segmento_empresa, $logradouro_empresa, $bairro_empresa, $cidade_empresa, $estado_empresa, $nome_produto_oculto, $tipo_produto_oculto, $marca_produto_oculto, $descricao_produto_oculto, $complemento, $forma_pagamento, $quantidade, $unidade, $valor_unitario, $valor_total, $data, $hora);
// i - integer
// d - double
// s - string
// b - BLOB


// inicio popup //
?>
  <script>
    alert("Despesa inserido com sucesso!");
  </script>
<?php
// fim popup //


$contador = 1;
while($contador <= 10000)
{

    if (empty($_POST["valor_total".$contador])) {
        echo "";
      } else {
        $valor_total = $_POST["valor_total".$contador];

        $nome_produto_oculto = $_POST["nome_produto_oculto".$contador];
        $tipo_produto_oculto = $_POST["tipo_produto_oculto".$contador];
        $marca_produto_oculto = $_POST["marca_produto_oculto".$contador];
        $descricao_produto_oculto = $_POST["descricao_produto_oculto".$contador];



// inicio Complemento //
if (empty($_POST["complemento".$contador])) {
  echo "";
} else {
  $complemento = $_POST["complemento".$contador];
}
// fim Complemento //


// inicio Forma Pagamento //
if (empty($_POST["forma_pagamento".$contador])) {
  echo "";
} else {
  $forma_pagamento = $_POST["forma_pagamento".$contador];
}
// fim Forma Pagamento //


// inicio Campo Quantidade //
if (empty($_POST["quantidade".$contador])) {
  echo "";
} else {
  $quantidade = $_POST["quantidade".$contador];
}
// fim Campo Quantidade //


// inicio Campo Unidade //
if (empty($_POST["unidade".$contador])) {
  echo "";
} else {
  $unidade = $_POST["unidade".$contador];
}
// fim Campo Unidade //


// inicio Campo Valor Unitario //
if (empty($_POST["valor_unitario".$contador])) {
  echo "";
} else {
  $valor_unitario = $_POST["valor_unitario".$contador];
}
// vim Campo Valor Unitario //


        $stmt->execute();
    }




    $contador++;
    }

    $stmt->close();
// fim Insert MySQL //


}
// fim PHP Form Validation //

?>