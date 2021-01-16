<?php

$link = "http://192.168.0.32/boomer"; // Menu

$menu_color = $menu_color1 = $menu_color2 = $menu_color3 = $menu_color4 = $menu_color5 = $menu_color6 = "";
$menu_color = $_SESSION["menu_color"];

if($menu_color == 1) {
    $menu_color1 = ' style="color: #f1f1f1"';
}
if($menu_color == 2) {
    $menu_color2 = ' style="color: #f1f1f1"';
}
if($menu_color == 3) {
    $menu_color3 = ' style="color: #f1f1f1"';
}
if($menu_color == 4) {
    $menu_color4 = ' style="color: #f1f1f1"';
}
if($menu_color == 5) {
  $menu_color5 = ' style="color: #f1f1f1"';
}
if($menu_color == 6) {
  $menu_color6 = ' style="color: #f1f1f1"';
}
?>

<!-- inicio menu html -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="<?php echo $link; ?>"<?php echo $menu_color1; ?>>Inicio</a>
  <a href="<?php echo $link; ?>/expenses/"<?php echo $menu_color2; ?>>Despesa</a>
  <a href="<?php echo $link; ?>/product/"<?php echo $menu_color3; ?>>Produto</a>
  <a href="<?php echo $link; ?>/company/"<?php echo $menu_color4; ?>>Empresa</a>
  <a href="<?php echo $link; ?>/extract/"<?php echo $menu_color5; ?>>Extrato</a>
  <a href="<?php echo $link; ?>/chart2/"<?php echo $menu_color6; ?>>Gráfico</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
</div>
<!-- fim menu html -->