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
$_SESSION["menu_color"] = 2;

if (isset($_GET['url'])) {
    $_SESSION["url_session"] = $_GET['url'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Boomer</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no"><!-- Disable Zoom on a Mobile Web Page -->
<link rel="stylesheet" href="../../menu/css/menu.css"><!-- menu stylesheet css -->
<link rel="stylesheet" href="../css/search_list.css"><!-- Search List stylesheet css -->
<link rel="stylesheet" href="../css/button.css"><!-- Button stylesheet css -->
<link rel="stylesheet" href="../css/footer_fixed.css"><!-- Rodapé Fixo stylesheet css -->
<link rel="stylesheet" href="../css/header_fixed.css"><!-- Head Fixo stylesheet css -->
</head>
<body>

<?php include '../../menu/index.php'; // Menu include ?>

<h1 style="margin: 35px;">Boomer</h1>
<h2 style="margin: 35px;">Despesa: <font color="#FF0000">(R$ <span id="sum">0.00</span>)</font></h2>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<!-- inicio Head Fixo html -->
<div id="header_fixed">

<!-- inicio Search List html -->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquise o nome do produto.." title="Pesquise o nome da empresa">

</div>
<!-- fim Head Fixo html -->


<ul id="myUL">

<?php
// inicio Select MySQL //
include '../../database/index.php'; // include Banco de dados

include 'select_in.php'; // include Banco de dados select

include 'insert.php'; // include Banco de dados insert

$conn->close(); // Fechar conexão
// fim Select MySQL //
?>

</ul>
<!-- fim Search List html -->

<br><br><br><br>

<!-- inicio Rodapé Fixo -->
<div class="footer">
<input type="submit" value="SALVAR">
</div>
<!-- fim Rodapé Fixo -->



</form>


<script src="../../menu/js/menu.js"></script><!-- menu javascript -->
<script src="../js/search_list.js"></script><!-- Search List javascript -->
<script src="../js/jquery.min.js"></script><!-- Somar Valores Despesa jquery -->
<script src="../js/calculate_sum.js"></script><!-- Somar Valores Despesa javascript -->
<script src="../js/header_fixed.js"></script><!-- Head Fixo javascript -->


   
</body>
</html>