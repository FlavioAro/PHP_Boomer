<?php

// inicio PHP Form Validation //
$nome = $tipo = $marca = $descricao = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = validation_input($_POST["nome"]);
  $tipo = validation_input($_POST["tipo"]);
  $marca = validation_input($_POST["marca"]);
  $descricao = validation_input($_POST["descricao"]);

// inicio Insert MySQL //
include '../database/index.php'; // include Banco de dados

$sql = "INSERT INTO Produto (Nome, Tipo, Marca, Descricao)
VALUES ('$nome', '$tipo', '$marca', '$descricao')";

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