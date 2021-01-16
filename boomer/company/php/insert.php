<?php

// inicio PHP Form Validation //
$nome = $segmento = $logradouro = $bairro = $cidade = $estado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = validation_input($_POST["nome"]);
  $segmento = validation_input($_POST["segmento"]);
  $logradouro = validation_input($_POST["logradouro"]);
  $bairro = validation_input($_POST["bairro"]);
  $cidade = validation_input($_POST["cidade"]);
  $estado = validation_input($_POST["estado"]);
  $observacoes = validation_input($_POST["observacoes"]);

// inicio Insert MySQL //
include '../database/index.php'; // include Banco de dados

$sql = "INSERT INTO Empresa (Nome, Segmento, Logradouro, Bairro, Cidade, Estado, Observacoes)
VALUES ('$nome', '$segmento', '$logradouro', '$bairro', '$cidade', '$estado', '$observacoes')";

if ($conn->query($sql) === TRUE) {
?>

<!-- inicio popup -->
  <script>
    alert("<?php echo $nome; ?> criado com sucesso!");
  </script>
<!-- fim popup -->

<?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Fechar conexão
// fim Insert MySQL //

}

function validation_input($form) {
  $form = trim($form);
  $form = stripslashes($form);
  $form = htmlspecialchars($form);
  return $form;
}
// fim PHP Form Validation //

?>