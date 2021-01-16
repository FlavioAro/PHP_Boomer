<?php

// inicio Select MySQL //
function data($data){
  return date("d/m/Y", strtotime($data));
}

function hora($hora){
  return date("H:i", strtotime($hora));
}

$sql = "SELECT Data, Empresa_Nome, Valor_Total, Empresa_Segmento, Empresa_Logradouro, Empresa_Bairro, Empresa_Cidade, Produto_Nome, Produto_Tipo, Produto_Marca, Produto_Descricao, Complemento, Forma_Pagamento, Quantidade, Unidade, Valor_Unitario, Hora FROM Despesa ORDER BY Id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $data = $row["Data"];
    $data = data($data);
    $valor_total = $row["Valor_Total"];
    $empresa_nome = $row["Empresa_Nome"];
    $empresa_segmento = $row["Empresa_Segmento"];
    $empresa_logradouro = $row["Empresa_Logradouro"];
    $empresa_bairro = $row["Empresa_Bairro"];
    $empresa_cidade = $row["Empresa_Cidade"];
    $produto_nome = $row["Produto_Nome"];
    $produto_tipo = $row["Produto_Tipo"];
    $produto_marca = $row["Produto_Marca"];
    $produto_descricao = $row["Produto_Descricao"];
    $complemento = $row["Complemento"];
    $forma_pagamento = $row["Forma_Pagamento"];
    $quantidade = $row["Quantidade"];
    $unidade = $row["Unidade"];
    $valor_unitario = $row["Valor_Unitario"];
    $hora = $row["Hora"];
    $hora = hora($hora);


    echo '<li><a><b><i>Produto Nome:</i></b> '.$produto_nome.'<br>';
    echo '<b><i>Valor Total:</i></b> <font color="#FF0000">R$ '.$valor_total.'</font><br>';
    echo '<b><i>Data/Hora:</i></b> '.$data.' '.$hora.'<br>';
    echo '<b><i>Produto Tipo:</i></b> '.$produto_tipo.'<br>';
    echo '<b><i>Produto Marca:</i></b> '.$produto_marca.'<br>';
    echo '<b><i>Produto Descrição:</i></b> '.$produto_descricao.'<br>';
    echo '<b><i>Complemento:</i></b> '.$complemento.'<br>';
    echo '<b><i>Quantidade:</i></b> '.$quantidade.' '.$unidade.'<br>';
    echo '<b><i>Valor Unitário:</i></b> R$ '.$valor_unitario.'<br>';
    echo '<b><i>Forma de Pagamento:</i></b> '.$forma_pagamento.'<br>';
    echo '<b><i>Empresa Nome:</i></b> '.$empresa_nome.'<br>';
    echo '<b><i>Empresa Segmento:</i></b> '.$empresa_segmento.'<br>';
    echo '<b><i>Empresa Endereço:</i></b> '.$empresa_logradouro.' - '.$empresa_bairro.', '.$empresa_cidade;
    echo '</a></li>';
    // echo '<br>';

  }
}
// inicio Select MySQL //

?>