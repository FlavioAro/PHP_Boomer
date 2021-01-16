<?php

// inicio Select MySQL //
$sql = "SELECT Id, Nome, Tipo, Marca, Descricao FROM Produto ORDER BY Tipo ASC, Nome ASC, Marca ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $codigo_produto = $row["Id"];
    $nome_produto = $row["Nome"];
    $tipo_produto = $row["Tipo"];
    $marca_produto = $row["Marca"];
    $descricao_produto = $row["Descricao"];

    echo '<li><a><b><i>Produto:</i></b> '.$nome_produto.'<br>';
    echo '<b><i>Tipo:</i></b> '.$tipo_produto.'<br>';
    echo '<b><i>Marca:</i></b> '.$marca_produto.'<br>';
    echo '<b><i>Descricao:</i></b> '.$descricao_produto.'<br>';
    echo '<b><i>Forma de Pagamento:</b> <select name="forma_pagamento'.$codigo_produto.'"><option value="Cartao Debito">Cartao Debito</option><option value="Cartao Credito">Cartao Credito</option><option value="Cartao Alymente">Cartao Alymente</option></select><br>';
    echo '<b><i>Quantidade:</b> <input type="text" name="quantidade'.$codigo_produto.'" style="width: 80px;"><br>';
    echo '<b><i>Unidade:</b> <select name="unidade'.$codigo_produto.'"><option value="UN">UN</option><option value="KG">KG</option></select><br>';
    echo '<b><i>Valor Unitário:</b> <input type="text" name="valor_unitario'.$codigo_produto.'" style="width: 80px;"><br>';
    echo '<b><i>Valor Total:</b> <input type="text" name="valor_total'.$codigo_produto.'" style="width: 80px;" name="txt" class="txt"><br>';
    echo '<b><i>Complemento:</b> <input type="text" name="complemento'.$codigo_produto.'" style="width: 120px;">';


    // inicio input oculto //
    echo '<input type="hidden" value="'.$nome_produto.'" name="nome_produto_oculto'.$codigo_produto.'">';
    echo '<input type="hidden" value="'.$tipo_produto.'" name="tipo_produto_oculto'.$codigo_produto.'">';
    echo '<input type="hidden" value="'.$marca_produto.'" name="marca_produto_oculto'.$codigo_produto.'">';
    echo '<input type="hidden" value="'.$descricao_produto.'" name="descricao_produto_oculto'.$codigo_produto.'">';
    // fim input oculto //

    echo '</a></li>';
    // echo '<br>';
  }
}
// inicio Select MySQL //

?>