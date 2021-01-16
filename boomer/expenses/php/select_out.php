<?php

// inicio Select MySQL //
$sql = "SELECT Id, Nome, Segmento, Logradouro, Bairro, Cidade FROM Empresa ORDER BY Segmento ASC, Nome ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $codigo = $row["Id"];
    $nome = $row["Nome"];
    $segmento = $row["Segmento"];
    $logradouro = $row["Logradouro"];
    $bairro = $row["Bairro"];
    $cidade = $row["Cidade"];

    echo '<li><a href="php/index.php?url='.$codigo.'"><b><i>Empresa:</i></b> '.$nome.'<br>';
    echo '<b><i>Segmento:</i></b> '.$segmento.'<br>';
    echo '<b><i>Logradouro:</i></b> '.$logradouro.'<br>';
    echo '<b><i>Bairro:</i></b> '.$bairro.'<br>';
    echo '<b><i>Cidade:</i></b> '.$cidade;
    echo '</a></li>';
    // echo '<br>';

  }
}
// inicio Select MySQL //

?>