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
$_SESSION["menu_color"] = 5;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Boomer</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no"><!-- Disable Zoom on a Mobile Web Page -->
<link rel="stylesheet" href="../menu/css/menu.css"><!-- menu stylesheet css -->
<link rel="stylesheet" href="css/search_list.css"><!-- Search List stylesheet css -->
<link rel="stylesheet" href="css/header_fixed.css"><!-- Head Fixo stylesheet css -->
</head>
<body>

<?php include '../menu/index.php'; // Menu include ?>

<h1 style="margin: 35px;">Boomer</h1>
<h2 style="margin: 35px;">Extrato</h2>


<br>


<!-- inicio Head Fixo html -->
<div id="header_fixed">

<!-- inicio Search List html -->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquise a despesa.." title="Pesquise a despesa">

</div>
<!-- fim Head Fixo html -->


<ul id="myUL">
<?php
// inicio Select MySQL //
include '../database/index.php'; // include Banco de dados

include 'php/select.php'; // include Banco de dados select

$conn->close(); // Fechar conexão
// fim Select MySQL //
?>
</ul>
<!-- fim Search List html -->



<script src="../menu/js/menu.js"></script><!-- menu javascript -->
<script src="js/search_list.js"></script><!-- Search List javascript -->
<script src="js/header_fixed.js"></script><!-- Head Fixo javascript -->

<!-- inicio Google Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>
<script src="../analytics/index.js"></script>
<!-- fim Google Analytics -->
   
</body>
</html>