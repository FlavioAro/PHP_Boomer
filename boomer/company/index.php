<?php
// Start the session
session_start();

// Set session variables
/*
$_SESSION["menu_color"] = 1; // Inicio
$_SESSION["menu_color"] = 2; // Despesa
$_SESSION["menu_color"] = 3; // Produto
$_SESSION["menu_color"] = 4; // Empresa
$_SESSION["menu_color"] = 5; // Extrato
*/
$_SESSION["menu_color"] = 4;

include 'php/insert.php'; // include Banco de dados insert

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Boomer</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no"><!-- Disable Zoom on a Mobile Web Page -->
<link rel="stylesheet" href="../menu/css/menu.css"><!-- menu stylesheet css -->
<link rel="stylesheet" href="css/form.css"><!-- form stylesheet css -->
<link rel="stylesheet" href="css/autocomplete.css"><!-- Auto Complete stylesheet css -->
<link rel="stylesheet" href="css/footer_fixed.css"><!-- Rodapé Fixo stylesheet css -->
</head>
<body>


<?php include '../menu/index.php'; // Menu include ?>


<h1 style="margin: 35px;">Boomer</h1>
<h2 style="margin: 35px;">Empresa</h2>


<!-- inicio form -->
<div class="div_form">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
    <label>Nome/Razão Social:</label>
    <input type="text" name="nome" placeholder="Digite o nome da empresa.." required>

    <label>Segmento:</label>
    <br>
    <div class="autocomplete" style="width:100%;">
    <input id="myInput" type="text" name="segmento" placeholder="Digite o segmento da empresa.." required>
    </div>
    <br>

    <label>Logradouro:</label>
    <input type="text" name="logradouro" placeholder="Digite o logradouro da empresa.." required>

    <label>Bairro:</label>
    <input type="text" name="bairro" placeholder="Digite o bairro da empresa.." required>

    <label>Cidade:</label>
    <input type="text" name="cidade" placeholder="Digite a cidade da empresa.." required>

    <label>Estado:</label>
    <select name="estado">
      <option value="SP">SP</option>
    </select>

    <label>Observações:</label>
    <input type="text" name="observacoes" placeholder="Digite as observações..">


  
    <!-- inicio Rodapé Fixo -->
    <div class="footer">
    <input type="submit" value="SALVAR">
    </div>
    <!-- fim Rodapé Fixo -->

  </form>
</div>
<!-- fim form -->


<script src="../menu/js/menu.js"></script><!-- menu javascript -->
<script src="js/autocomplete.js"></script><!-- Auto Complete javascript -->

<!-- inicio Google Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>
<script src="../analytics/index.js"></script>
<!-- fim Google Analytics -->
   
</body>
</html>